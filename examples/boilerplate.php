<?php
/**
 * Boilerplate for GDS examples
 *
 * @author Tom Walder <tom@docnet.nu>
 */
require_once('../vendor/autoload.php');
require_once('config/setup.php');

require_once('Book.php');

// We'll need a Google_Client, use our convenience method
$obj_client = GDS\Gateway::createGoogleClient(GDS_APP_NAME, GDS_SERVICE_ACCOUNT_NAME, GDS_KEY_FILE_PATH);

// Gateway requires a Google_Client and Dataset ID
$obj_gateway = new GDS\Gateway($obj_client, GDS_DATASET_ID);

// Define our Model Schema
$obj_book_schema = (new GDS\Schema('Book'))->addString('title')->addString('author')->addString('isbn', TRUE);

// Store requires a Gateway and Schema
$obj_book_store = new GDS\Store($obj_gateway, $obj_book_schema);
