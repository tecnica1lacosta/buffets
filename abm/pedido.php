<?php
session_name("loginbuffet");
session_start();
if(isset($_SESSION["documento"]) || $_SESSION["documento"] !=""){

}else{
	header("Location: login/index.html");
}