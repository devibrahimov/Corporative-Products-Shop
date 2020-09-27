<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home/index'; 
$route['mehsullar'] = 'Products/index';
$route['haqqimizda'] = 'About/index';
$route['qarantiya'] = 'Qarantiya/index';
$route['elaqe'] = 'Contact/index';
$route['mehsullar/(:any)'] = 'products/Product_category/$1';
$route['zkmehsullar/(:any)'] = 'products/zkProduct_category/$1';
$route['mehsullar/(:any)/(:any)'] = 'products/Product_detail/$2';  

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
