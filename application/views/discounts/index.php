<?php require_once 'application/header.php'; ?>
<section class="discounts">
  
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/public/img/ring1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/public/img/ring1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/public/img/ring1.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 

<h2>Товары со скидкой</h2>
<div class="row">
<?php  foreach ($salegoods as $catalog) { ?>
  <?php   echo  '<div class="col-md-3 product_card">
      <a href="/catalog/'.$catalog["id"].'">
      
          <img class="product_card_img"  src="/public/img/'.$catalog["img"].'" alt="">
          <h5 class="product_name">' .$catalog["name"].'</h5></a>
          <div class="cost">Цена в золоте 585: '.$catalog["cost_gold"].'</div>
          <div class="cost">Цена в серебре 925: '.$catalog["cost_silver"].'</div>
         
          <a href="/cart/addAjax/'.$catalog["id"].'"><button class="add-to-cart btn" data-id="'.$catalog["id"].'">Добавить в корзину</button></a>
          </div>'; ?>

  <?php } ?>
</div>
</section>



<?php require_once 'application/footer.php'; ?>