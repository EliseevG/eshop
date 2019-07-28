<?php require_once 'application/header.php'; ?>
<section class="catalog_category">
<div class="row">
	<?php  foreach ($categoryProducts as $catalog) { ?>
	<?php   echo	'<div class="col-md-3 product_card">
			<a href="/catalog/'.$catalog["id"].'">
			
	        <img class="product_card_img"  src="/public/img/'.$catalog["img"].'" alt="">
	        <h5 class="product_name">' .$catalog["name"].'</h5></a>
	        <div class="cost">цена: '.$catalog["cost"].' ₽</div>
	        <button class="incart_button btn" data-id="'.$catalog["id"].'">В корзине</button>
	        <button class="add-to-cart btn" data-id="'.$catalog["id"].'">Добавить в корзину</button>
	        <button class="btn js-order_button"  title="Заказать из других матерьялов">На заказ</button>
	       
	        </div>'; ?>

	<?php } ?>
</div>
<div class="row  justify-content-center">
	<div class="pagination_body col-3">
	<?php echo $pagination->get(); ?>
</div>
</div>


</section>

	        	
<?php require_once 'application/footer.php'; ?>	


