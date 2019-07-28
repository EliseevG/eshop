<?php require_once 'application/header.php'; ?>
<section class="catalog_item">
<div class="row">
	<div class="col-6"><img style="margin-bottom: 40px;" class="w-100" src="/public/img/<?php echo $catalogItem['img'];?>" alt="">
		<button class="btn">Задать вопрос</button>
		<button class="btn" title="Рассчитать стоимость изделия на заказ">Рассчитать стоимость</button>
	</div>

	<div class="col-6">
		<h2><?php echo $catalogItem['name'];?></h2>
		<p><?php echo $catalogItem['discription'];?></p>
		<table>
			
		
		<tr><td>Вес : </td><td><?php echo $catalogItem['weight']; ?></td></tr>
		<tr><td>Размер : </td><td><?php echo $catalogItem['razmer']; ?></td></tr>
		<tr><td>Матерьял : </td><td><?php echo $catalogItem['material']; ?></td></tr>
		<tr><td>Камень : </td><td><?php echo $catalogItem['gem']; ?></td></tr>
		
		</table>
		<h3>ОТ ЧЕГО ЗАВИСИТ ЦЕНА?</h3>
		<p>- От металла. Для изготовления Вы можете выбрать серебро 925, золото (белое, жёлтое, красное) 585 или 750 пробы.</p>
		<p>- От наличия драгоценных камней. При заказе Вы можете выбрать и добавить любые камни или выбрать изготовление без камней.</p>
		<p>Для расчета точной стоимости напишите нам все ваши пожелания / корректировки в данную модель кольца</p>
			

	</div>

	
</div>
</section>

<?php require_once 'application/footer.php'; ?>