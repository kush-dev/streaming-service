<!DOCTYPE html>
<html>
<head>
    <title>Football Streaming - Past Matches</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Your CSS styles here */
        
        img {
            max-width: 100%;
            height: auto;
        }
        
        @media (max-width: 776px) {
            /* Your CSS styles for small screens here */
        }
        
        @media (min-width: 576px) and (max-width: 868px) {
            /* Your CSS styles for medium screens here */
        }
        
        @media (min-width: 968px) {
            /* Your CSS styles for large screens here */
        }
    </style>
    <script src="https://vjs.zencdn.net/7.12.8/video.min.js"></script>
    <link href="https://vjs.zencdn.net/7.12.8/video-js.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




    <link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>
<title>Football Streaming - Past Matches</title>
    
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
</body>
</html>
