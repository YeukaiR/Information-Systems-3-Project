<?php
// Include database details from config.php file
require_once("config.php");

// Check if the request is POST and a commentID is provided
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['commentID'])) {
    // attempt to make database connection
    $connection = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
    
    //get the submitted data
    $commentID = mysqli_real_escape_string($connection, $_POST['commentID']); //get the commentID to be deleted
    $page = mysqli_real_escape_string($connection, $_POST['page']); //the page the processor must go back to to return the data
    $userID = mysqli_real_escape_string($connection, $_POST['userID']); //get the userID info
    $ticketID = mysqli_real_escape_string($connection, $_POST['ticketID']);
    $houseName = mysqli_real_escape_string($connection, $_POST['house_name']);

    // Check if connection was successful
    if ($connection->connect_error) {
        die("<p class=\"error\">Connection failed: Incorrect credentials or Database not available!</p>");
    }

    // Update the soft_delete_comment value to true for the given commentID
    $sql_delete = "UPDATE systemsurgeons.comment SET soft_delete_comment = true WHERE commentID = '$commentID' AND userName = '$userID'";

    if ($connection->query($sql_delete) === TRUE) {


        if ($page == 'all') {
            header("Location: house_warden_all_tickets.php?ticketID=$ticketID");
            exit();}
        else if ($page == 'confirmed') {
            header("Location: house_warden_confirmed.php?ticketID=$ticketID");
            exit();}
        else if ($page == 'requis'){
            header("Location: house_warden_requis_tickets.php?ticketID=$ticketID");
            exit();}
        else if ($page == 'resolved'){
            header("Location: house_warden_resolved_ticket.php?ticketID=$ticketID");
            exit();}
        else if ($page == 'closed'){
            header("Location: house_warden_closed_tickets.php?ticketID=$ticketID");
            exit();}
        else if ($page == 'open'){
            header("Location: house_warden_open_tickets.php?ticketID=$ticketID");
            exit();}
        else {
            echo "<p class='error'>Failed to find page to return to: " . $connection->error . "</p>";
        }

    } else {
        echo "<p class='error'>Failed to delete comment: " . $connection->error . "</p>";
    }
    
    // Close the connection
    $connection->close();
}
?>
