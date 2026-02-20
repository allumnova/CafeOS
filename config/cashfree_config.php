<?php
// config/cashfree_config.php

/**
 * Cashfree API Credentials
 * Moved to Environment Variables for Security
 */
define('CASHFREE_APP_ID', getenv('CASHFREE_APP_ID') ?: '');
define('CASHFREE_SECRET_KEY', getenv('CASHFREE_SECRET_KEY') ?: '');
define('CASHFREE_ENV', getenv('CASHFREE_ENV') ?: 'PROD'); // TEST or PROD

define('CASHFREE_BASE_URL', (CASHFREE_ENV === 'PROD') 
    ? 'https://api.cashfree.com/pg' 
    : 'https://sandbox.cashfree.com/pg');
