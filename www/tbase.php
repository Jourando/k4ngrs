<?php
IF ((ISSET($_GET['str'])) || (ISSET($_POST['str']))) {
	IF (ISSET($_GET['str'])) {
		echo "Test resault: str recived via GET (http method) is equal to ".$_GET['str'];
	} else {
		echo "Test resault: str recived via POST (http method) is equal to ".$_POST['str'];
	}
} else {
	echo "Test resault: test failed";
}
?>