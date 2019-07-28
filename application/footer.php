     </div>
</div>
</div>
<footer>
	<div class="container-fluid footer">
		<div class="row">
			<div class="col-3">
				<h2>falcon<br>JEWELLERY</h2>
			</div>
			<div class="col-3">
				<h5>Каталог</h5>
				
						<ul>
				          <?php $categoryList = Category::getCategoryList(); ?>
				          <?php foreach ($categoryList as $key) { 
				            echo '<li><a href="/catalog/'.$key['url'].'">'.$key['name'].'</a></li>';
				           } ?>
          
        				</ul> 
				
				
			</div>
			
			<div class="col-3">
				<h5>Навигация</h5>
					

						<ul class="footer_nav">
				          <li><a href="http://falconjewellery.loc">Главная</a></li>
				          <li><a href="http://falconjewellery.loc/delivery">Доставка</a></li>
				          <li><a href="http://falconjewellery.loc/comments">Отзывы</a></li>
				          <li><a href="http://falconjewellery.loc/aboutus">О нас</a> </li>
				          <li><a href="http://falconjewellery.loc/order">Как заказать</a></li>
				          <li><a href="http://falconjewellery.loc/news">Блог</a></li>
				          <li><a href="http://falconjewellery.loc/guarantees">Гарантии</a></li>
				          <li><a href="http://falconjewellery.loc/discounts">Акции</a></li>
				          <li><a id="cart-count" href="http://falconjewellery.loc/cart">(<?php echo Cart::countItems(); ?>)Корзина</a></li>
      					</ul>
					
				</div>	
			
			
			<div class="col-3">

				<h5>Контакты</h5>

				<h6>Email:</h6>
				<p>falcon@jewellery.ru</p>
				<br>
				<h6>Телефон:</h6>
				<p>8(999)123-45-67</p>

				<a href="https://www.instagram.com/falcon_jewellery/?igshid=mim17pezvime"><img class="social_icons" src="/public/img/icons/001-instagram.png" alt=""></a>
			    <a href=""><img class="social_icons" src="/public/img/icons/002-vk.png" alt=""></a>
			    <a href=""><img class="social_icons" src="/public/img/icons/004-facebook.png" alt=""></a>
			    <a href=""><img class="social_icons" src="/public/img/icons/003-telegram.png" alt=""></a>
			    <a href=""><img class="social_icons" src="/public/img/icons/005-youtube.png" alt=""></a>
				
			</div>
		</div>
	</div>

	<hr>
	<p style="text-align: center;font-size: 12px;">Falcon.ru © 2010-2019 - <b>Ювелирная мастерская «Falcon jewellery». Изготовление эксклюзивных ювелирных изделий.</b></p>

</footer>


</main>
<div class="overlay js-overlay">
	        		<div class="popup js-popup">
	        			<div class="popup_rzmer">
		        			<h4>Укажите свой размер</h4>
		        			<button class="razmer-13 choose_razmer">13</button>
		        			<button class="razmer-14 choose_razmer">14</button>
		        			<button class="razmer-15 choose_razmer">15</button>
		        			<button class="razmer-16 choose_razmer">16</button>
		        			<button class="razmer-17 choose_razmer">17</button>
		        			<button class="razmer-18 choose_razmer">18</button>	
	        			</div>
	        			<div class="popup_material">
	        				<h4>Укажите матерьял</h4>
	        				<button class="choose_material">Белое золото</button>
	        				<button class="choose_material">Золото 585</button>
	        				<button class="choose_material">Розовое золото</button>
	        				<button class="choose_material">Лимонное золото</button>
	        				<button class="choose_material">Серебро</button>
	        			</div>
	        			<div class="popup_gem">
	        				<h4>Укажите камни</h4>
	        				<button class="chooze_gem">Бриллиант</button>
	        				<button class="chooze_gem">Топаз</button>
	        				<button class="chooze_gem">Аметист</button>
	        				<button class="chooze_gem">Цитрин</button>
	        				<button class="chooze_gem">Изумруд</button>
	        			</div>
	        			<div class="ty">
	        				<h4>Ваш заказ в корзине!</h4>
	        			</div>
						<div class="close_popup js-close_popup"></div>
	       			</div>
	       			<div class="popup js-popup-2">
	        			
						<div class="close_popup js-close_popup"></div>
	       			</div>
	       			</div>
	   </div>
<script src="/public/js/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
	
	$(document).ready(function() {
		
		$(".add-to-cart").click(function() {
			var id = $(this).attr("data-id");
			$.post("/cart/addAjax/"+id, {}, function(data) {


				$("#cart-count").html('('+data+')');
			});
			
			$('.add-to-cart[data-id='+id+']').fadeOut(100);
			$('.incart_button[data-id='+id+']').delay(100).fadeIn(100);
			return false;

		});
		


		$(".delete_from_cart").click(function() {
			
			var id_delete = $(this).attr("data-id");
			$.post("/cart/deleteProduct/"+id_delete, {}, function(data) {
				if (data!=0) {
					$("#cart-count").html('('+data+')');
				} else {
					$("#cart-count").html('');
				};
				
				if(data==0) {
				$('.cart_main').html('Корзина пуста!');
			};
			});
			$('[data-id='+id_delete+']').fadeOut();;
			return false;
		});

		
		
	});	


</script>
<script src="http://falconjewellery.loc/public/js/main.js"></script>