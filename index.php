<!DOCTYPE html>

<html lang="ru">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>First Page</title>
  <link rel="stylesheet" href="assets/CSS/styles.css">

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
      <div class="header-content-right">
        <h1 class="header-h1-text">I <b>develop</b> awesome websites that make an impact. </h1>

        <p class="header-p-text">Hi! Iām Svetlana, a Full Stack Developer based in Russia. I create information systems
          for fast-growing startups.
        </p>

        <button class="header-button">
          <a class="header-button-text" href="mailto:svetlanatat@mail.ru">Write me!</a>
          <img class="header-button-envelope" src="./assets/images/envelope.png" alt="āļø">
        </button>

        <div class="header-achieve">
          <img class="header-p2-image" src="./assets/images/Vector header_2.png" alt="š">
          <div class="header-achieve-content">
            <p class="header-p2-text">Passed the Altshu Web Developing Course </p>
            <div class="header-achieve-content-links">
              <a class="header-p2-link" href="https://altshu.com/course"> WebDevelopment 2022 </a>
              <a class="header-p2-link" href="https://altshu.com/"> ā¢ altshu.com </a>
            </div>
          </div>
        </div>
      </div>
      <div class="header-content-left">
        <img class="header-image" src="./assets/images/image 1.jpg" alt="š©š¼āš»">
      </div>
    </div>
  </header>
  <main>

    <section id="About-section">
      <div class="About">
        <article id="About">
          <div class="article-about-header">
            <h3>
              <img src="./assets/images/Vector_wave.png" alt="vector wave">
              <b>ABOUT</b>
            </h3>
          </div>
          <div class="About-content">
          
            <div class="about-left-frame">
              
              <div class="about-left-frame-review">
                <div class="stars">
                  <img src="./assets/images/Vector_star.png" alt="ā­">
                  <img src="./assets/images/Vector_star.png" alt="ā­">
                  <img src="./assets/images/Vector_star.png" alt="ā­">
                  <img src="./assets/images/Vector_star.png" alt="ā­">
                  <img src="./assets/images/Vector_star.png" alt="ā­">
                </div>
                <p class="about-review">Working with Svetlana was interesting. She is a high-organized person, that can
                  create simple websites
                  with Yii-2 and React.js technologies.</p>
                <div class="reviewer-info">
                  <img class="reviewer-info-foto" src="./assets/images/Rectangle%201.png" alt="šµ">
                  <div class="reviewer-info-text">
                    <p class="reviewer-info-p1">Anastasiya Smirnova</p>
                    <p class="reviewer-info-p2">Middle+ FullStack Developer in GEROPHARM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="about-right-frame">
              <h4 class="about-right-frame-h4">Develop websites for fast growing digital startups</h4>
              <div class="about-achievements">
                <div class="about-achievements-numbers">
                  <p class="about-achievements-p">2+</p>
                  <p class="about-achievements-p">2+</p>
                  <p class="about-achievements-p">5</p>
                </div>
                <div class="about-achievements-text">
                  <p class="about-achievements-p">
                    Months of experience
                  </p>
                  <p class="about-achievements-p">
                    Projects completed
                  </p>
                  <p class="about-achievements-p">
                    Technologies learnt
                  </p>
                </div>
                <div class="about-achievements-icons">
                  <p class="about-achievements-p">
                    <img src="./assets/images/icons8-html-64.png" width="30" alt="HTML+CSS"> <br>HTML+CSS
                  </p>
                  <p class="about-achievements-p">
                    <img src="./assets/images/javascript_logo_icon_181330.png" width="30" alt="JS logo">
                    <img src="./assets/images/react_logo_icon_144942.png" width="30" alt="react logo">
                    <br>JS, React.js
                  </p>
                  <p class="about-achievements-p">
                    <img src="./assets/images/php_logo_icon_144990.png" width="30" alt="php logo">
                    <img src="./assets/images/prog-yii_icon-icons.com_50765.png" width="30" alt="yii logo">
                    <br>PHP, YII-2
                  </p>
                  <p class="about-achievements-p">
                    <img src="./assets/images/brand_mysql_icon_157867.png" width="30" alt="mysql logo">
                    <br>MySQL
                  </p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <section id="Work-section">
      <div class="work">
        <article id="Work">
          <div class="article-work-header">
            <h3>
              <img src="./assets/images/Vector_wave.png" alt="vector wave">
              WORK
            </h3>
          </div>
          <h4 class="work-h4">Bringing great results for every client.</h4>
          <div class="articles">
            <div class="work-articles-block">
              <article id="About-this">
                <img class="about-image" src="./assets/images/work_1.jpg" alt="image">
                <div class="work-articles-block-text">
                  <h5 class="About-this-h5">About this
                    <img class="About-this-arrow" src="./assets/images/arrow.png" alt="āļø">
                  </h5>
                  <p>Donec maximus blandit porta. Etiam porttitor libero tincidunt, tempus diam id, volutpat nulla. In
                    id
                    pellentesque nunc.</p>
                </div>
              </article>
            </div>
            <div class="work-articles-block">
              <article id="About that">
                <img class="about-image" src="./assets/images/work_2.jpg" alt="image">
                <div class="work-articles-block-text">
                  <h5 class="About-this-h5">About that
                    <img class="About-this-arrow" src="./assets/images/arrow.png" alt="āļø">
                  </h5>
                  <p>Integer mollis fermentum urna, a tempor ante. Nam orci turpis, tristique sit amet pharetra nec,
                    efficitur
                    vel tellus.</p>
                </div>
              </article>
            </div>
            <div class="work-articles-block">
              <article id="Look at my work">
                <img class="about-image" src="./assets/images/work_3.jpg" alt="image">
                <div class="work-articles-block-text">
                  <h5 class="About-this-h5">Look at my work
                    <img class="About-this-arrow" src="./assets/images/arrow.png" alt="āļø">
                  </h5>
                  <p>Vivamus mattis eu odio non aliquam. Vestibulum tristique congue laoreet. Nulla facilisi.</p>
                </div>
              </article>
            </div>
            <div class="work-articles-block">
              <article id="Something interesting">
                <img class="about-image" src="./assets/images/work_4.jpg" alt="image">
                <div class="work-articles-block-text">
                  <h5 class="About-this-h5">Something interesting
                    <img class="About-this-arrow" src="./assets/images/arrow.png" alt="āļø">
                  </h5>
                  <p>Suspendisse lacinia ante vel sapien gravida fringilla. Integer ipsum enim, maximus id turpis ut,
                    sodales
                    egestas libero. </p>
                </div>
              </article>
            </div>
            <div class="work-articles-block">
              <article id="Origin UI/UX Design">
                <img class="about-image" src="./assets/images/work_5.jpg" alt="image">
                <div class="work-articles-block-text">
                  <h5 class="About-this-h5">Origin UI/UX Design
                    <img class="About-this-arrow" src="./assets/images/arrow.png" alt="āļø">
                  </h5>
                  <p>Morbi sit amet eros sagittis, pellentesque lectus ac, interdum nibh.</p>
                </div>
              </article>
            </div>
            <button class="button-work">
              <a href="" class="button-work-text">
                VIEW ALL PROJECTS
              </a>
            </button>
        </article>
      </div>
    </section>

    <section id="services-sec">
      <article id="Services">
        <div class="article-services-header">
          <h3>
            <img src="./assets/images/Vector_wave.png" alt="vector wave">
            SERVICES
          </h3>
        </div>

        <div class="services">
          <h2 class="subtitle">Pushing the boundaries of your potential</h2>

          <article class="services__item">
            <img class="services__item-icon" src="./assets/images/services_image_1.png" alt="š">
            <h5 class="services-h5">Branding</h5>
            <p class="services-p">Refresh your logo, revamp your website, and even your letterheadā develop a cohesive
              aesthetic for your
              brand.</p>
          </article>

          <article class="services__item">
            <img class="services__item-icon" src="./assets/images/services_image_2.png" alt="š”">
            <h5 class="services-h5">Packaging</h5>
            <p class="services-p">Rethink labels, boxes, signage, and everything that'll help your product make a great
              first impression.</p>
          </article>

          <article class="services__item">
            <img class="services__item-icon" src="./assets/images/services_image_3.png" alt="image">
            <h5 class="services-h5">Memorabilia</h5>
            <p class="services-p">Choose from easy, affordable options for merch like custom tees and sets of pins.</p>
          </article>

          <article class="services__item">
            <img class="services__item-icon" src="./assets/images/services_image_4.png" alt="</>">
            <h5 class="services-h5">Visual Aids</h5>
            <p class="services-p">Make your point more convincingly with branded flyers, slides, catalogues,
              infographics.</p>
          </article>

          <article class="services__item">
            <button class="services-button">Contact me</button>
            <div class="services-button-waves">
              <img src="./assets/images/services_image_5.png" alt="2 vector waves">
            </div>
          </article>
        </div>
      </article>
      </div>
    </section>


    <section id="Blog-section">
      <div class="blog-section">
        <div class="blog">
          <article id="Blog">
            <div class="blog-header">
              <h3>
                <img src="./assets/images/Vector_wave.png" alt="vector wave">
                <b>BLOG</b>
              </h3>
            </div>
            <P class="blog-title-p"><br>Words On Design, Tech & Other Things I Love</P>
    
            <?php

            if(empty($_GET['m']))
            $_GET['m']=0;          

            echo '<div class="blog-articles">';
        
              $dbConnect = mysqli_connect("localhost", "root", "", "altshu_final_project");
              $query = mysqli_query($dbConnect, "SELECT * FROM news");
              
              while ($row = mysqli_fetch_array($query)) { 
            if ($_GET['m']==0 and $row['id']<4)
            { 
            echo '<a name="yakor'.$row['id'] . '">
            <article class=blog-news-articles></a>
              <img class="blog-news-images" src="' . $row['image_url'].'" alt="image">
              <div class="blog-news-articles-data">
                <h5 class="blog-news-h5">' . $row['created_at'] . '</h5>
                <h6 class="blog-news-h6">' . $row['title'] . '</h6>
                <p class="blog-news-p">' . $row['description'] . '</p>
              </div>
              <a href="news_' . $row['id'] . '.php" class="blog-news-articles__link">View post </a>
            </article> ';
            }
            elseif (($row['id']<4) or
                    ($_GET['m']==1 and $row['id']>3)) {
              { 
                echo '<a name="yakor'.$row['id'] . '">
                <article class=blog-news-articles></a>
                  <img class="blog-news-images" src="' . $row['image_url'].'" alt="image">
                  <div class="blog-news-articles-data">
                    <h5 class="blog-news-h5">' . $row['created_at'] . '</h5>
                    <h6 class="blog-news-h6">' . $row['title'] . '</h6>
                    <p class="blog-news-p">' . $row['description'] . '</p>
                  </div>
                  <a href="news_' . $row['id'] . '.php" class="blog-news-articles__link">View post </a>
                </article> ';
                }
            }
              }

            echo '<a name="yakor_add"></a>';

            echo '<a href=index.php?m=1&#yakor3 style="text-decoration: none;"><button class="blog-title-button">
            Explore all posts <img src="./assets/images/Blog_image_1.png">
            </button></a>';
            
            
            // echo $_GET['m'];
            // if($_GET['m'] = 1) { 
              while ($row = mysqli_fetch_array($query)) { 
             if($row['id']==4) { 
              echo '<a name="yakor'.$row['id'] . '">
              <article class=blog-news-articles></a>
                <img class="blog-news-images" src="' . $row['image_url'].'" alt="image">
                <div class="blog-news-articles-data">
                  <h5 class="blog-news-h5">' . $row['created_at'] . '</h5>
                  <h6 class="blog-news-h6">' . $row['title'] . '</h6>
                  <p class="blog-news-p">' . $row['description'] . '</p>
                </div>
                <a href="news_' . $row['id'] . '.php" class="blog-news-articles__link">View post </a>
              </article> ';
               }
               else{echo '<br>';}
                }
              // }

            echo '</div>';



            echo '            <div class="blog-title">
            

          </div>';
                       
            ?>
          </article>
        </div>
      </div>

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
                    <input id="name" class="window-form-input" placeholder="Enter your name" >
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
                Ā©ļø Powered by Svetlana, 2022
              </p>
            </div>
          </div>
        </div>
      </footer>
    </section>
    <script src="./assets/scripts/scripts.js"></script>
</body>

</html>