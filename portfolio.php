<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - Adan HAMIDOU</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="portfolio.css">
</head>
<body>

  <header class="hero">
    <h1 class="glitch" data-text="Adan HAMIDOU">Adan HAMIDOU</h1>
    <p class="typing">Développeur Web | Passionné par l'innovation</p>
  </header>

  <section class="about">
    <h2>À propos de moi</h2>
    <p>Étudiant à Epitech Lyon, je maîtrise HTML, CSS, JavaScript, PHP et les bases de données SQL avec MariaDB et phpMyAdmin.</p>
  </section>

  <section class="projects">
    <h2>Mes projets</h2>
    <div class="carousel">
      <div class="carousel-images">
        <img src="caroussel/my_meetic.png" alt="Projet my meetic">
        <img src="caroussel/my_cinema_screen.png" alt="Projet my cinema">
        <img src="caroussel/tweet_screen.png" alt="Projet twitter">
      </div>
      <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
      <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>

  </section>
<style>
  a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>
</head>
<body>


<center>
<a href="portfolio_mycinema.php" target="_blank">Voir le projet my cinema</a>
</center>
<br><br><br><br>
  <footer>
    <p>Contactez-moi : <a href="mailto:adan.hamidou@epitech.eu">adan.hamidou@epitech.eu</a></p>
  </footer>

  <script src="portfolio.js"></script>
</body>
</html>
