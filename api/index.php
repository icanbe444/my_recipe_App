<?php
session_start();
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// Database configuration
$host = 'localhost';
$username = 'root';
$password = 'root';
$database = 'tpaiseve_recipe';

// Create database connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_errno) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Set headers to allow cross-origin requests
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Handle the API requests
$action = $_GET['action'];

switch ($action) {
    case 'create_account':
        createAccount();
        break;
    case 'login':
        login();
        break;
    case 'add_recipe':
        addRecipe();
        break;
    case 'top_recipes':
        topRecipes();
        break;
    case 'edit_recipe':
        editRecipe();
         break;
    case 'view_recipes':
        viewRecipes();
        break;
    case 'get_recipe':
        getRecipe();
        break;
    case 'search_recipe':
        searchRecipes();
        break;
    case 'like_recipe':
        likeRecipe();
        break;
    default:
        echo json_encode(['error' => 'Invalid action']);
}

// Create a user account
function createAccount()
{
    global $mysqli;

    // Get the data from the API request
    $fullname = $_POST['fullname'];
    $store_name = $_POST['store_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $role = 'chef';
    $reg_date = date("Y-m-d H:i:s");

    // Check if passwords match
    if ($password !== $password2) {
        echo json_encode(['error' => 'Passwords do not match']);
        return;
    }

    // Encrypt the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL statement
    $stmt = $mysqli->prepare("INSERT INTO chefs (fullname,store_name,email,password,role,reg_date) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $fullname,$store_name,$email,$password,$role,$reg_date);

    // Execute the statement
    if ($stmt->execute()) {
        echo json_encode(['success' => 'Account created successfully']);
    } else {
        echo json_encode(['error' => 'Failed to create account']);
    }

    // Close the statement
    $stmt->close();
}

// User login
function login()
{
    global $mysqli;

    // Get the data from the API request
    $email = $_POST['email'];
    $Dpassword = $_POST['password'];

    // Prepare the SQL statement
    $stmt = $mysqli->prepare("SELECT password FROM chefs WHERE email = ?");
    $stmt->bind_param("s", $email);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $password = $row['password'];

        // Verify the password
        if ($Dpassword == $password) {
                        session_start();
            $_SESSION['user_id'] = $row['user_id'];
            echo json_encode(['success' => 'Login successful']);
        } else {
            echo json_encode(['error' => 'Invalid password']);
        }
    } else {
        echo json_encode(['error' => 'User not found']);
    }

    // Close the statement and result
    $stmt->close();
    $result->close();
}

// Add a recipe
function addRecipe()
{
    global $mysqli;

    // Get the data from the API request
    $title = $_POST['title'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];

    // Prepare the SQL statement
    $stmt = $mysqli->prepare("INSERT INTO recipes (title, ingredients, instructions) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $ingredients, $instructions);

    // Execute the statement
    if ($stmt->execute()) {
        echo json_encode(['success' => 'Recipe added successfully']);
    } else {
        echo json_encode(['error' => 'Failed to add recipe']);
    }

    // Close the statement
    $stmt->close();
}

// Edit a recipe
function editRecipe()
{
    global $mysqli;

    // Get the data from the API request
    $recipeId = $_POST['id'];
    $title = $_POST['title'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];

    // Prepare the SQL statement
    $stmt = $mysqli->prepare("
        UPDATE recipes 
        SET title = ?, ingredients = ?, instructions = ? 
        WHERE id = ?");
    $stmt->bind_param("sssi", $title, $ingredients, $instructions, $recipeId);

    // Execute the statement
    if ($stmt->execute()) {
        echo json_encode(['success' => 'Recipe updated successfully']);
    } else {
        echo json_encode(['error' => 'Failed to update recipe']);
    }

    // Close the statement
    $stmt->close();
}

//View all recipe

function viewRecipes()
{
    global $mysqli;

    // Prepare the SQL statement
    $stmt = $mysqli->prepare("SELECT * FROM recipes ORDER BY likes DESC LIMIT 20");

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if there are any products
    if ($result->num_rows > 0) {
        // Fetch all products as an associative array
        $products = $result->fetch_all(MYSQLI_ASSOC);

        // Return the products as JSON
        echo json_encode($products);
    } else {
        echo json_encode([]);
    }
}

//Top Recipe

function topRecipes()
{
    global $mysqli;

    // Prepare the SQL statement
    $stmt = $mysqli->prepare("SELECT * FROM recipes WHERE likes >='1'");

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if there are any products
    if ($result->num_rows > 0) {
        // Fetch all products as an associative array
        $products = $result->fetch_all(MYSQLI_ASSOC);

        // Return the products as JSON
        echo json_encode($products);
    } else {
        echo json_encode([]);
    }
}


//get a recipe

function getRecipe()
{
    $productId = $_GET['id'];
    global $mysqli;

    // Prepare the SQL statement
    $stmt = $mysqli->prepare("SELECT * FROM recipes WHERE r_id = ?");

    // Bind the product ID parameter
    $stmt->bind_param('i', $productId);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if the product exists
    if ($result->num_rows > 0) {
        // Fetch the product as an associative array
        $product = $result->fetch_assoc();

        // Return the product as JSON
        echo json_encode($product);
    } else {
        echo json_encode(null);
    }

}


//search recipe

function searchRecipes()
{
    $searchTerm = $_POST['term'];
    global $mysqli;

    // Prepare the SQL statement
    $stmt = $mysqli->prepare("SELECT * FROM recipes WHERE title LIKE CONCAT('%', ?, '%') AND CHAR_LENGTH(title) >= 0.2 * CHAR_LENGTH(?)");
    $stmt->bind_param("ss", $searchTerm, $searchTerm);

    // Execute the statement
    if ($stmt->execute()) {
        // Get the result
        $result = $stmt->get_result();

        // Check if there are any recipes
        if ($result->num_rows > 0) {
            // Fetch all recipes as an associative array
            $products = $result->fetch_all(MYSQLI_ASSOC);

            // Return the recipes as JSON
            echo json_encode($products);
            return;
        }

        // No recipes found
        echo json_encode([]);
    } else {
        // Error occurred
        echo "Error occurred while searching: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

//Like recipe
function likeRecipe()
{
    $recipeId = $_POST['id'];
    global $mysqli;

    // Update the likes count in the database
    $stmt = $mysqli->prepare("UPDATE recipes SET likes = likes + 1 WHERE r_id = ?");
    $stmt->bind_param('i', $recipeId);
    $stmt->execute();

    // Return the updated likes count as response
    $stmt = $mysqli->prepare("SELECT likes FROM recipes WHERE r_id = ?");
    $stmt->bind_param('i', $recipeId);
    $stmt->execute();
    $stmt->bind_result($likes);
    
    if ($stmt->fetch()) {
        echo json_encode(['likes' => $likes]);
    } else {
        echo json_encode(['likes' => null]);
    }
    
    exit();
}
// Close the database connection
$mysqli->close();
?>