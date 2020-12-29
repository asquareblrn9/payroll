<?php
session_start();
$_SESSION['MM_Username_member'] = NULL;
unset($_SESSION['MM_Username_member']);
session_destroy();
$redirect_page ='../';

header("Location: " . $redirect_page );

?>
