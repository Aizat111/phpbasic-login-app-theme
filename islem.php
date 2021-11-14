<?php
include 'functions/helper.php';
session_start();
$user=['sahinersever'=>'123456'
];
if(get(get:'islem')=='giris')
{
	$_SESSION['username']=post(post:'username');
	$_SESSION['password']=post(post:'password');
	if(!post(post:'username'))
	{	$_SESSION['error']='Lutfen kullanici adini giriniz';
		header(header:'Location:login.php');
		exit();
	}
	if(!post(post:'password'))
	{	$_SESSION['error']='Lutfen sifrenizi giriniz';
		header(header:'Location:login.php');
		exit();
 	}
}


?>