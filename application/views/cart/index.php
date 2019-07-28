<?php require_once 'application/header.php'; ?>
<section class="cart">
	<h2 class="title text-center">Корзина</h2>
	<?php if ($productsInCart) {?>
	
	<div class="row cart_main">
		<div class="col-md-7 cart_left">
			<?php foreach ($products as $product):?>
		<div class="row" data-id="<?php echo $product['id']; ?>">
			<div class="col-md-5">
				 <?php echo '<img style="width: 100%;" src="/public/img/'.$product['img'].'">'; ?>
			</div>
			<div class="col-md-5">
				<table>
		<tr><th><?php echo $product['name']; ?></th></tr>
	 
		
		
		
		<tr><td>Количество: </td><td><?php echo $productsInCart[$product['id']]; ?></td></tr>
		<tr><td>Артикул: </td> <td><?php echo $product['id']; ?></td></tr>
		
	</tr>
	</table>
	<h5><?php echo $product['cost']; ?> ₽</h5>
	<button class="delete_from_cart" data-id="<?php echo $product['id']; ?>">Удалить</button>
			</div>
		</div>
	
	
	<br>
<?php endforeach; ?>
		</div>
		<div class="col-md-4">
			<?php if ($result): ?>
                        <p>Заказ оформлен. Мы Вам перезвоним.</p>
                    <?php else: ?>
                        <?php if (!$result): ?>                        

                            <div class="col-md-12">
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <p>Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>

                                <div class="login-form">
                                    <form  action="#" method="post">
                                        <div class="form-group">               
                                        <p>Ваше имя</p>
                                        <input class="form-control" type="text" name="username" placeholder="Имя" pattern="([а-я]+)\([а-я]+)" minlength="2" maxlength="18" value="<?php echo $username; ?>"/>
                                        </div>
                                        <div class="form-group">
                                        <p>Номер телефона</p>
                                        
                                        <input class="form-control" type="text" name="userphone" placeholder="8 (999) 123 45 67" pattern="([0-9]+)" minlength="11" maxlength="11" value="<?php echo $userphone; ?>"/>
                                        </div>
                                        <p>Комментарий к заказу<br><small>(не обязательно)</small></p>

                                        <div class="form-group">
                                        <input  class="form-control" type="text" name="usercomment" placeholder="Сообщение" rows="3" pattern="\([а-я]+)\" value="<?php echo $usercomment; ?>"> </input>
                                        </div>
                                         <?php if ($errors) ?><small><?php echo $errors;?></small>
                                        
                                        <input type="submit" name="submit" class="btn btn-default" value="Оформить" />
                                    </form>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

			<p>Заказ на сумму: <b> <?php
			echo $totalPrice; ?> ₽</b></p>
			
			
		</div>
	</div>




<?php }else {
	echo 'Корзина пуста!';
 }?>



</section>

<?php require_once 'application/footer.php'; ?>