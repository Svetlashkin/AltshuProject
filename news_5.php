<!DOCTYPE html>

<html lang="ru">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>News_1</title>
  <link rel="stylesheet" href="assets/CSS/styles_news_1.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Roboto+Mono:wght@100;200;300;400&display=swap"
    rel="stylesheet">

</head>

<body>

  <header>
    <div class="header-navigation">
      <div class="header-h1">
        <img class="header-h1-image" src="./assets/images/Vector header.png">
        <h1>blog</h1>
      </div>

      <nav class="nav-container">
        <ul class="nav-list">

          <li class="nav-li-item"><a href="#About-section">About</a></li>
          <li class="nav-li-item"><a href="#Work-section">Work</a></li>
          <li class="nav-li-item"><a href="#services-sec">Services</a></li>
          <li class="nav-li-item"><a href="#Blog-section">Blog</a></li>
          <li class="nav-li-item"><a href="#footer">Contact</a></li>

        </ul>
      </nav>
    </div>
    <div class="header-content">
        <h1 class="header-h1-text">Words On Design, Tech & Other Things I Love</h1>
    </div>
  </header>

  <main>
    <section id="Blog-section">
    <?php
    $dbConnect = mysqli_connect("localhost", "root", "", "altshu_final_project");
    $query = mysqli_query($dbConnect, "SELECT * FROM news WHERE id = 5");
    $row = mysqli_fetch_array($query);


    echo '<img class="blog-news-images" src="' . $row['image_url'].'" alt="image">
      <div class="blog-section">
        <div class="blog">
          <article id="Blog">
            <div class="blog-articles">
              <article class="blog-news-articles">
                <div class="blog-news-articles-data">
                  <h5 class="blog-news-h5">' . $row['created_at'] . '</h5>
                  <h6 class="blog-news-h6">' . $row['title'] . '</h6>
                  <p class="blog-news-p">' . $row['text'] . '</p> 
                </div>
              </article>
              <a href="index.php#yakor_add" class="blog-news-articles__link"> Back </a>
            </div>
          </article>
        </div>
      </div>
'; ?>
      <footer id="footer">
        <div class="footer">
          <div class="footer-content">
            <div class="footer-nav-item">
              <h3>
                <img src="./assets/images/Vector_wave.png">
                CONTACT
              </h3>
            </div>
            <div class="footer-running-string">
              <p class="footer-running-string-content">
                Have something in mind?  Let's connect.  Have something in mind?  Let's connect.  Have something in mind?  Let's connect.  Have something in mind?  Let's connect.  Have something in mind?  Let's connect.
              </p>
            </div>
          
            <div class="footer-links">
              <div>
                <p>
                  <a class="footer-mail" href="mailto:svetlanatat@mail.ru">svetlanatat@mail.ru</a><br>
                  <a class="footer-mail" href="https://m.vk.com/id409238">VK</a><br>
                  <a class="footer-mail" href="https://github.com/Svetlashkin?tab=repositories">GitHub</a>
                </p>
              </div>
              <div>
                <nav>
                  <ul id="footer-nav">
                    <li><a class="footer-navigation" href="#about">About</a></li>
                    <li><a class="footer-navigation" href="#work">Work</a></li>
                    <li><a class="footer-navigation" href="#blog">Blog</a></li>
                    <li><a class="footer-navigation" href="#contact">Contact</a></li>
                  </ul>
                </nav>
              </div>
              <div class="footer-subscribe">
                <p>Subscribe to my weekly newsletter</p>
                <div class="footer-subscibtion__input-group">
                  <button class="footer-subscibtion__button" type="submit" onclick="showModalWin()">Click it!</button>
                </div>
              </div>
              <div style="text-align: center" id="popupWin" class="modalwin">
                <h2> Subscribe to recieve news and information!</h2>
                <form id="subsribtion" class="window-form-subsribtion">
                    <input id="name" class="window-form-input js-input-email" placeholder="Enter your name" >
                    <input id="email" class="window-form-input" placeholder="Enter your email" type="email">
                    <input class="window-form-button" type="submit" value="OK">
                </form>
              </div>          
            </div>
          </div>
          <div>
            <hr class="footer-line">
            <div class="footer-cb">
              <p class="footer-cb-text">
                ©️ Powered by Svetlana, 2022
              </p>
            </div>
          </div>
        </div>
      </footer>
    </section>
    <script src="./assets/scripts/scripts.js"></script>
</body>

</html>