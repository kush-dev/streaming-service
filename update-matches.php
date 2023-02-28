<?php
// Connect to the database (replace with your own database credentials)
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'matches';
$conn = mysqli_connect($host, $user, $password, $database);

// Retrieve the match data from the database
$query = "SELECT * FROM matches";
$result = mysqli_query($conn, $query);

// Display the match data on the website
echo '<table>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['match_name'] . '</td>';
    echo '<td>' . $row['match_date'] . '</td>';
    echo '<td>' . $row['results'] . '</td>';
    echo '<td>' . $row['link'] . '</td>';
    echo '</tr>';
}
echo '</table>';


// Close the database connection
mysqli_close($conn);
?>
