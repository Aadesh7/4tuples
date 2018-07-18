<?php 
	include 'dbconn.php';

		if(isset($_POST['submit'])){
			
			echo $_POST['option'];
			echo $_POST['correct'];
			if(isset($_SESSION['correct1']) && isset($_SESSION['correct2']) && isset($_SESSION['correct3'])){	
				if($_POST['option'] === $_SESSION['correct1'] || isset($_SESSION['correct2']) || isset($_SESSION['correct3'])){
					$status = 'correct';
				}
				else{
					$status = 'incorrect';
				}
			}

			if($_POST['option'] === $_SESSION['correct']){
				$status = 'correct';
			}
			else{
				$status = 'incorrect';
			}

		}
		$count = $_SESSION['count'];
		$sql = "INSERT INTO ans VALUES ('$count', '$status')";
		$result = mysqli_query($conn, $sql);

		$count = $count + 1;
		$_SESSION['count'] = $count; 

		
		header('Location: test_main.php');
?> 


