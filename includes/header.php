
<header id="header">
  <div class="header__top">
    <div class="container">
      <div class="header__top__logo">
        <h1>
          <?php
            echo $config['title'];
          ?>
        </h1>
      </div>
      <nav class="header__top__menu">
        <ul>
          <li><a href="/test_blog">Главная</a></li>
          <li><a href="/test_blog/pages/about_me.php">Обо мне</a></li>
          <li><a href="<?php echo $config['vk_url']; ?>" target="_blank" >Я Вконтакте</a></li>
        </ul>
      </nav>
    </div>
  </div>

  
  <div class="header__bottom">
    <div class="container">
      <nav>
        <ul>
          <?php 
            $categories = $pdo->query('SELECT * FROM `articles_categories`')->fetchAll();
            foreach ($categories as $category) {
              ?>
              <li><a href='/categories.php?id=<?php echo $category['id'];   ?>'>
                <?php echo $category['title']; ?>
              </a></li>
              <?php
            }
          ?>
        </ul>
      </nav>
    </div>
  </div>
</header>
