<?php require_once 'application/header.php'; ?>
<section class="catalog">
<div class="row">
	
	<?php include_once 'application/models/Category.php'; ?>
        <?php foreach ($categoryList as $key) { 
          echo '<div class="col-3">';
          echo '<a href="/catalog/'.$key['url'].'"><img class="w-100" src="'.$key['img'].'"><h4>'
          .$key['name'].'</h4></a>';
          echo '</div>';
         } ?>
</div>
</section>
<?php require_once 'application/footer.php'; ?>
