<?php

session_start();

if(isset($_SESSION['user'])){
	$_SESSION['message'] = '<div class="alert alert-success alert-dismissible text-center fade show" role="alert">Saliste del Sistema<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">';
	unset($_SESSION['user']);
}

header("Location:../index.php");