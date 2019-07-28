
<head>
    <meta charset="UTF-8">
    <title>falcon</title>
    <link rel="stylesheet" href="http://falconjewellery.loc/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://falconjewellery.loc/public/css/style.css">
</head>
<body>
  <main>
<header>

    
<div class="container-fluid"> 
<div class="container-fluid">

  <div class="row top_header">
  <!-- <div class="col-2">
      <img class="logo" src="img/logo.png" alt="">
    </div>-->
    <div class="col-2 title">
      <h1>falcon</h1><p class="title_small">Украшения ручной работы</p>
      
    </div>
    <div class="col-3 offset-1 head_slogan">
      <p>Ювелирная дизайн-студия "Falcon Soul"
      <br>
      Изготовление эксклюзивных ювелирных изделий 
      любой сложности по доступной цене
      </p>
    </div>
    <div class="col-3 offset-2">
      
      <a href="https://www.instagram.com/falcon_jewellery/?igshid=mim17pezvime"><img class="social_icons" src="/public/img/icons/001-instagram.png" alt=""></a>
      <a href=""><img class="social_icons" src="/public/img/icons/002-vk.png" alt=""></a>
      <a href=""><img class="social_icons" src="/public/img/icons/004-facebook.png" alt=""></a>
      <a href=""><img class="social_icons" src="/public/img/icons/003-telegram.png" alt=""></a>
      <a href=""><img class="social_icons" src="/public/img/icons/005-youtube.png" alt=""></a>
    </div>
       
  </div>

<div class="row">
  <div class="col-12 menu_bar">
  
  <nav class="navbar navbar-expand-lg">
    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar1">
      <ul class="navbar-nav header_nav">
          <li class="nav-item active"><a class="nav-link" href="http://falconjewellery.loc">Главная</a></li>
          <li class="nav-item active"><a class="nav-link" href="http://falconjewellery.loc/catalog">Каталог</a></li>
          <li class="nav-item active"><a class="nav-link" href="http://falconjewellery.loc/delivery">Доставка</a></li>
          <li class="nav-item active"><a class="nav-link" href="http://falconjewellery.loc/comments">Отзывы</a></li>
          <li class="nav-item active"><a class="nav-link" href="http://falconjewellery.loc/order">Как заказать</a></li>
          <li class="nav-item active"><a class="nav-link" href="http://falconjewellery.loc/news">Блог</a></li>
          <li class="nav-item active"><a class="nav-link" href="http://falconjewellery.loc/guarantees">Гарантии</a></li>
          <li class="nav-item active"><a class="nav-link" href="http://falconjewellery.loc/discounts">Акции</a></li>
          <li class="nav-item active"><a class="nav-link" href="http://falconjewellery.loc/cart"><small id="cart-count"><?php $product_count = Cart:: countItems(); if ($product_count) echo '(' . $product_count.')'; ?></small>Корзина</a></li>
      </ul>
    </div>
</nav>
</div>
</div>  

</header>
   

<div class="row">
  <div class="col-3">
    <div class="sidebar">
      <div class="sidebar_category">
        <h2>Каталог товаров</h2>
        <hr>
        <ul>
          <?php $categoryList = Category::getCategoryList(); ?>
          <?php foreach ($categoryList as $key) { 
            echo '<li><a href="/catalog/'.$key['url'].'">'.$key['name'].'</a></li>';
           } ?>
          
        </ul> 
      </div>
    
    </div>
     
  </div>





  <div class="col-9">

