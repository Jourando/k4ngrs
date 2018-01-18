<?php
// если не add | del | edit | list , выдать сообщение о подключении
IF (ISSET($_POST['str'])) {
	$ep=$_POST['str'];
	if (($ep=='add') || ($ep=='del') || ($ep=='edit') || ($ep=='list') || ($ep=='show') || ($ep=='hide')) {
		
	} else {
		echo "keybase service is ready";
	}
} else {
	echo ">>keybase service is ready<br>choose an action:";
}
?>