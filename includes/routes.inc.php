<?php
// routes.inc.php

if ($user->isUserAdmin()) {

    $routes = array(
        'frontpage' => 'admin_frontPage_controller.php',
        'createCategory' => 'admin_createCategory_controller.php',
        'deleteCategory' => 'admin_deleteCategory_controller.php',
        'editCategory' => 'admin_editCategory_controller.php',
        'createProduct' => 'admin_createProduct_controller.php',
        // 'deleteProduct' => 'admin_deleteProduct_controller.php',
        // 'editProduct' => 'admin_editProduct_controller.php',
        'createAttribute' => 'admin_createAttribute_controller.php',
        //'deleteAttribute' => 'admin_deleteAttribute_controller.php',
        //'editAttribute' => 'admin_editAttribute_controller.php',
        'createImage' => 'admin_createImage_controller.php',
        // 'deleteImage' => 'admin_deleteImage_controller.php',
        // 'editImage' => 'admin_editImage_controller.php',
        'admin_log_in' => 'admin_log_in_controller.php',

    );
} else {

    $routes = array(
        'cart' => 'cart_controller.php',
        'checkout' => 'checkout_controller.php',
        'confirmation' => 'confirmation_controller.php',
        'default' => 'default_controller.php',
        'my_account' => 'my_account_controller.php',
        'product' => 'product_controller.php',
        'products' => 'products_controller.php',
        'thanks' => 'thanks_controller.php',
        'sign_up' => 'sign_up_controller.php',
        'log_in' => 'log_in_controller.php',
        'log_out' => 'log_out_controller.php',
        'get_image' => 'get_image_controller.php',
        'sign_up_success' => 'sign_up_success_controller.php',
        'user_delete' => 'user_delete_controller.php',
        'user_edit' => 'user_edit_controller.php',
        'change_password' => 'change_password_controller.php',
        'order_history' => 'order_history_controller.php',
        'contact_info' =>'contact_info_controller.php',
        'forgot_password' =>'forgot_password_controller.php',

    );
}

