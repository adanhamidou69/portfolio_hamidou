

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>tweet</title>
    <link rel="stylesheet" href="tweet.css" />
    <script src="tweet.js" defer></script>
  </head>
  <?php include 'header.php'; ?>
  <body>
  <?php include 'tweet-connection.php'; ?>

    <section class="tweet-box">
    
      <div id="tweet" method="POST">
        <div class="tweet-head">
          <div class="tweet-icon-name">
            <img src="images/user.png" alt="" width="20px" height="20px" />
            <span class="name-user" id="user" name="user">Name User</span>
          </div>

          <div class="limited">
            <span class="counter-limit"></span>
            <img
              src="images/image-icon.png"
              alt="" id="imagesicon"
            />
            <button id="publier" action=""  name="publier" class="pub">Publier</button>
          </div>
        </div>
        <div class="tweet-box-text">
          <span class="placeholder">Creer un tweet</span>
          <div class="message-editable" name="tweet" id="editable" contenteditable="true"></div>
        </div>
      </div>
      <span id="annonce"></span>
      <div  id="myNewTweet">
      
      </div>

    </section>
  </body>
  <?php include 'footer.php'; ?>
</html>