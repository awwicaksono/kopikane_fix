<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Register
$route['Daftar'] = 'Ads';

// Logout
$route['Logout'] = 'Adminpanel/logout';

//=====================
// Tambah Data Cafe
$route['TambahData'] = 'Tambah_cafe';


// Halaman User
    // Landing Page
        $route['default_controller'] = 'main';
    // About Page
        $route['About'] = '';
    // Cafe Page
        $route['Cafe'] = '';

// Halaman Authentikasi
    // Register
    // Login
    // Logout


