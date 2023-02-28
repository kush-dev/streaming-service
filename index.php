<!DOCTYPE html>
<html>

<head>
    <title>Ganja Streaming Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="fav.jpg">

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
    
<style>
  .thumbnail-container {
    position: relative;
    display: inline-block;
  }
  
  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.2s ease-in-out;
  }
  
  .thumbnail-container:hover .overlay {
    opacity: 10;
  }
  
  .fa-play {
    color: #fff;
    font-size: 3em;
  }
</style>
    <script src="https://vjs.zencdn.net/7.12.8/video.min.js"></script>
    <link href="https://vjs.zencdn.net/7.12.8/video-js.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




    <link rel="stylesheet" type="text/css" href="index.css">


</head>



<body>
<?php
             // Connect to the database (replace with your own database credentials)
                $host = 'localhost';
                $user = 'root';
                $password = '';
                $database = 'matches';
                $conn = mysqli_connect($host, $user, $password, $database);
               $query = "SELECT * FROM matches where match_id ='1'";
               $result = mysqli_query($conn, $query);
               $row = mysqli_fetch_assoc($result);
               $match_name = $row["match_name"];
               $match_result = $row["results"];
               $match_date = $row["match_date"];
               $match_link= $row["link"];
               $image=$row['image11'];
         
             // Display the match data on the website


             mysqli_close($conn);
            ?>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#fixtures">Fixtures</a></li>
                <l1><a href="#footer">Support Us</a></l1>
                <li><a href="#footer">About Us</a></li>
                <li><a href="#footer">Contact</a></li>
                
            </ul>
        </nav>

     
    </header>
    
    <main>
        <section class="banner">
            <h1>Welcome to our Football Streaming Service.Watch Past football matches on demand.</h1>
            
            <!-- The Modal -->
           <?php
           
           ?>

            <a href="">
                  <?php echo "<p>$match_name</p>"; ?>
                  <?php echo "<p>$match_result</p>"; ?>
            <div class="thumbnail-container">
                <img id="video-thumbnail" src="uploads/<?= $image ?>" alt="Video thumbnail" width="900px" height="600px"><p><?php echo $match_name; ?></p>
                <div class="overlay">
                   <a href="<?php echo $match_link; ?>">
                 <i class="fa fa-play"></i>
            </div> 
        </a>
    </div>
            </div>    
            </a>

        </section>
             
       
        <section class="content">
            <h2 id="fixtures">Past Matches</h2>
            <ul>
                <?php
            $conn = mysqli_connect($host, $user, $password, $database);
               $query = "SELECT * FROM matches";
               $result = mysqli_query($conn, $query);

               
               if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    $match_name = $row["match_name"];
                    $match_result = $row["results"];
                    $match_date = $row["match_date"];
                    $match_link= $row["link"];
                    $image=$row['image11'];
                    ?>
                    <li>
                    <a href="<?php echo $match_link; ?>">
                    
                    
                    <img id="video-thumbnail" src="uploads/<?= $image ?>" alt="Video thumbnail" width="200px" height="200px" onclick="window.location.href='<?php echo $match_link; ?>';"><p><?php echo $match_name; ?></p>
                    <?php echo "<h6>$match_result</h6>"; ?>
                    <?php echo "<h6>$match_date</h6>"; ?>
                </li>
                <?php
                }
               }else{
                echo "Waiting for matches to load.......!!!";
               }
               ?>
            </ul>
        </section>
       

</div>
    </main>
    <footer id="footer">
        
        <div class="social-icons">
            <a href="https://www.facebook.com/login/device-based/regular/login/" target="_blank">
                <i class="fa fa-facebook">Facebook</i>
            </a>
            <a href="https://twitter.com/" target="_blank">
                <i class="fa fa-twitter">Twitter</i>
            </a>
            <a href="https://www.instagram.com/" target="_blank">
                <i class="fa fa-instagram">Instagram</i>
            </a>
        </div>
        <div class="support-icon" id="support-link">
            <a href="#">
                <i class="fa fa-thumbs-up">Support Us</i>
            </a>
        </div>
        <h2>Ganja Tv © 2023</h2>
        <h2>DISCLAIMER: All the video content found on Ganja.com is not hosted on our servers, All videos are uploaded by football / soccer fans to websites like YouTube or Dailymotion. To discuss this disclaimer or the removal of appropriate credit
            for materials of which you hold copyright contact us.&copy; 2023 Ganja Football Streaming Service. All rights reserved.</h2>
    </footer>
    <button id="scroll-to-top" onclick="scrollToTop()" >Top</button>


</body>
<script>
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
}

window.addEventListener('scroll', function() {
  var scrollPosition = window.innerHeight + window.pageYOffset;
  var pageHeight = document.documentElement.scrollHeight;

  if (scrollPosition >= pageHeight) {
    document.querySelector('button').style.display = 'block';
  } else {
    document.querySelector('button').style.display = 'none';
  }
});

const playButton = document.getElementById('play-button');
playButton.addEventListener('click', function() {
  window.location.href = 'https://vtopshotsvideos.elhighlights.com/embed/AP5ao9U9OqYeA';
});

</script>
<script>
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        alert("This Website can only be accessed on a PC/Computer. We are working to provide a Mobile Friendly Enviroment soon....!");
    }
</script>

<script>
    $(document).ready(function() {
        $('#video-thumbnail').click(function(event) {
            event.preventDefault();
            var videoSrc = $(this).attr('href');
            var videoPlayer = '<video id="my-video " class="video-js " controls preload="auto " width="640 " height="264 "><source src=" ' + videoSrc + ' " type="video/mp4 "></video>';
            $(this).replaceWith(videoPlayer);
            videojs('my-video').play();
        });
    });
</script>
<script>
    const supportLink = document.getElementById('support-link');
    supportLink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the link from navigating to a new page
        const popupContent = 'Thank you for your support!!!! Make Donations on Paypal to allanngugi7@gmail.com  <br><br><br> © 2023 Ganja Football Streaming Service. All rights reserved.'; // Replace this with your desired content'
        window.open('', 'popup', 'width=600,height=400'); // Open a new window with specified dimensions
        const popupWindow = window.open('', 'popup');
        popupWindow.document.write(popupContent); // Write content to the new window
    });
</script>



</html>