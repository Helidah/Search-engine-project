<?php
include("../config.php");

if(isset($_POST["imageURL"])) {
$query = $con->prepare("UPDATE images SET clicks = clicks + 1 WHERE imageURL=:imageURL");
$query->bindParam(":id", $_POST["imageURL"]);
$query->execute();

}
else{
    echo "No image URL passed to page";
}
?>