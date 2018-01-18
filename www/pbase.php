<?php
$tRes=false;
$list = Array (
"tester0" => "test",
"user1" => "user"
);
IF (ISSET($_POST['str'])) {
	$data = $_POST['str'];
	list($user, $pass, $uid) = explode(":", $data);
	if (($user=='') || ($pass=='') || ($uid=='')) { echo "Auth failed"; }
	else {
		$user=$user.$uid;
		if (array_key_exists($user, $list)) {
			if ($list[$user]==$pass) {echo "User is logged [".md5($user.$uid."pbase")."]";}
			else {echo "Wrong password";}
		} else { echo "Wrong login"; }
	}
} else { echo "Nothing was found"; }
?>