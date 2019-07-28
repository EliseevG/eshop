<?php  
class CommentsController
{


	
	public function actionIndex()
	{
		$callbackList = array();
		$callbackList = Comments::getСommentsList();

		if(isset($_POST['submit'])) {
			$username = $_POST['username'];
			$text = $_POST['text'];
			$result = Comments::setComment($username, $text);
			header("Location: /comments");
		}


		require_once (ROOT.'/application/views/comments/index.php');
		return true;
	}

	



	
}