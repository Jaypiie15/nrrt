<?php
include('class/url.php');
$url = new Url('/nrrt/');
if (!$url->segment(1))
$page = '';
else
$page = $url ->segment(1);
switch ($page) {
  

  case '';
    require 'pages/index.php';
  break;

  case 'redirect';
  require 'includes/redirect.php';
  break;

  case 'index';
    require 'pages/index.php';
  break;

  case 'tracking';
  require 'pages/tracking.php';
  break;

  case 'administrator';
  require 'pages/administrator/login.php';
  break;

  case 'dashboard';
  require 'pages/administrator/dashboard.php';
  break;

  case 'edit-event';
  require 'pages/administrator/edit-event.php';
  break;

  case 'add-users';
  require 'pages/administrator/add-users.php';
  break;

  case 'reports';
  require 'pages/administrator/reports.php';
  break;

  case 'edit-user' :
  require 'pages/administrator/edit-user.php';
  break;

  default:
    require 'pages/404.php';
    break;
}
