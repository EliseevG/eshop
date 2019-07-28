<?php 

 class Order
 {



 	public static function save ($username, $userphone, $usercomment, $products) 
 	{
 		

 		$db = Db::getConnection();

 		$sql = 'INSERT INTO orders_list (user_name, user_phone, user_comment, products) '
 			. 'VALUES (:user_name, :user_phone, :user_comment, :products)';

 		$products = json_encode($products);
 		$result = $db->prepare($sql);
 		$result->bindParam(':user_name', $username, PDO::PARAM_STR);
 		$result->bindParam(':user_phone', $userphone, PDO::PARAM_STR); 	
 		$result->bindParam(':user_comment', $usercomment, PDO::PARAM_STR); 	
 		$result->bindParam(':products', $products, PDO::PARAM_STR); 	 

 		return $result->execute();

 		
 	}
 }