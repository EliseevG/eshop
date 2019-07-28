<?php require_once 'application/header.php'; ?>
<section class="comments">
<form action="#" method="post" class="comment_input">
  <div class="form-group">
    <label for="exampleInputEmail1">Имя</label>
    <input name="username" type="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ваше Имя">
    
  </div>
  <div class="form-group">
    <label for="exampleInputText1">Комментарий</label>
    <textarea name="text" type="text" class="form-control input_text" id="exampleInputPassword1" placeholder="Ваш комментарий" rows="3"></textarea>
  </div>
  <button name="submit" type="submit" class="btn btn-primary">Оставить комментарий</button>
</form>
<?php foreach ($callbackList as $key) {
	echo '<div class="comment">';
	echo '<div class="comment_name"><p>'.$key['name'].':<p><p>'.$key['date'].'</p></div>';
	echo '<div class="comment_text"><p>'.$key['text'].'</p></div>';
	echo '</div>';
} ?>	


</section>


<?php require_once 'application/footer.php'; ?>
