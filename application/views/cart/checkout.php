<?php require_once 'application/header.php'; ?>
<section class="cart_checkout">
    <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Корзина</h2>


                    <?php if ($result): ?>
                        <p>Заказ оформлен. Мы Вам перезвоним.</p>
                    <?php else: ?>
                        <?php if (!$result): ?>                        

                            <div class="col-sm-4">
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
                                         <?php if ($errors) ?><small><?php echo $errors; ?></small>
                                        
                                        <input type="submit" name="submit" class="btn btn-default" value="Оформить" />
                                    </form>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

                </div>

            </div>
</section>
           

 <?php require_once 'application/footer.php'; ?>