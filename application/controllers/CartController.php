<?php  

class CartController
{
	public function actionAdd($id) 
	{
		Cart::addProduct($id);
		$referrer = $_SERVER['HTTP_REFERER'];
		header("Location: $referrer");
	}


	public function actionAddAjax($id) 
	{

		echo Cart::addProduct($id);
		return true;
	}

	public function actionDelete($id) {
		echo Cart::deleteProduct($id);
		return true;
	}

	public function actionIndex() 
	{
		$categories = array();
		$categories = Category::getCategoryList();

		$productsInCart = false;

		$productsInCart = Cart:: getProducts();

		if ($productsInCart) {

			$productsIds = array_keys($productsInCart);
			$products = Catalog:: getGoodsItemByIdsArray($productsIds);

			$totalPrice = Cart:: getTotalPrice($products);
		}

		require_once 'application/views/cart/index.php';

		return true;
	}

	public function actionCheckout()
	{
		$productsInCart = Cart::getProducts();

		if ($productsInCart = false) {

		} else{
		$productsInCart = Cart::getProducts();

		$productsIds = array_keys($productsInCart);
		$products = Catalog:: getGoodsItemByIdsArray($productsIds);
		$totalPrice = Cart:: getTotalPrice($products);

		$totalQuantity = Cart:: countItems();

		$username = false;
		$userphone = false;
		$usercomment = false;


		$result = false;

		if (isset($_POST['submit'])) {
			$username = $_POST['username'];
			$userphone = $_POST['userphone'];
			$usercomment = $_POST['usercomment'];

			$products = 'asdasd';

			$errors =false;
			if ($username!='') {
				if ($userphone!=''){
				}else {
				$errors = '<small>Заполните поле: Телефон</small>'	;
				}
			}else {
				$errors += 'Заполните поле: Имя';

			}
			if ($errors =false) {

			
				$result = Order::save($username, $userphone, $usercomment, $productsInCart);

				if($result) {

					
					$mail = new PHPMailer;

					$mail->CharSet = 'utf-8';
					$mail->isSMTP();

					$mail->Host = 'smtp.yandex.ru';
					$mail->SMTPAuth = true;
					$mail->Username = 'eliseevg94@yandex.ru';
					$mail->Password = 'gogensmail1994';
					$mail->SMTPSecure = 'ssl';
					$mail->Port = 465;

					$mail->setFrom('eliseevg94@yandex.ru');
					$mail->addAddress('eliseev1994@list.ru');

					$mail->isHTML(true);

					$mail->Subject = 'НОВЫЙ ЗАКАЗ!';
					$mail->Body = 'Заказ от: '.$username.'Телефон: '. $userphone.'<br> Товары: '. $products.'на сумму: '.$totalPrice . '<br>Коммментарий заказчика: '. $usercomment;
					$mail->AltBody = '';

					if($mail->send()) {

					//header("Location: /cart");


					Cart::clear();
					}
					
				}
			}
		}
	}
		require_once(ROOT.'/application/views/cart/checkout.php');
		return true;
		}
		
	}





