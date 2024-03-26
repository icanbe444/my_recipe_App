<?php require_once("check-login.php");

if (isset($_GET['id'], $_GET['type'])) {
    $id = $_GET['id'];
    $type = $_GET['type'];

     // Define the table name and identifier column based on the type parameter
    $table = "";
    $identifierColumn = "";
    switch ($type) {
        case 'chef':
            $table = "chefs";
            $identifierColumn = "user_id";
            break;
        case 'user':
            $table = "users";
            $identifierColumn = "u_id";
            break;
        case 'recipe':
            $table = "recipes";
            $identifierColumn = "r_id";
            break;
        default:
            die("Invalid type parameter");
    }


$result = $db_con->prepare("DELETE FROM $table WHERE $identifierColumn ='$id'");
$result->execute();
    
  echo "<script type = \"text/javascript\">
									alert(\"$type Deleted\");
									window.location = (\"home.php\")
									</script>";
}
?>