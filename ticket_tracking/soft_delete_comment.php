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

    // Check if connection was successful
    if ($connection->connect_error) {
        die("<p class=\"error\">Connection failed: Incorrect credentials or Database not available!</p>");
    }

    // Update the soft_delete_comment value to true for the given commentID
    $sql_delete = "UPDATE systemsurgeons.comment SET soft_delete_comment = true WHERE commentID = '$commentID' AND userName = '$userID'";

    if ($connection->query($sql_delete) === TRUE) {

        if ($page == 'all') {
            header("Location: ticket_tracking_all.php?ticketID=$ticketID");
            exit();}
        else if ($page == 'open') {
            header("Location: ticket_tracking_open.php?ticketID=$ticketID");
            exit();}
        else if ($page == 'closed') {
            header("Location: ticket_tracking_closed.php?ticketID=$ticketID");
            exit();}
        else if ($page == 'confirmed') {
            header("Location: ticket_tracking_confirmed.php?ticketID=$ticketID");
            exit();}
        else if ($page == 'resolved') {
            header("Location: ticket_tracking_resolved.php?ticketID=$ticketID");
            exit();}
        else if ($page == 'requisitioned') {
            header("Location: ticket_tracking_requis.php?ticketID=$ticketID");
            exit();}
        else if ($page == 'rejected') {
            header("Location: ticket_tracking_closed.php?ticketID=$ticketID");
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
