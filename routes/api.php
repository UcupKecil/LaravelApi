<?php
use Illuminate\Support\Facades\Route;

require_once('includes/auth.php');

Route::group(
    ['middleware' => 'auth:api'],
    function() {
        require_once('includes/user.php');
        require_once('includes/profile.php');
        require_once('includes/brand.php');
    }
);
