<?php

return array(

    //-------------------------------
    // Timezone for insert dates in database
    // If you want PoolPort not set timezone, just leave it empty
    //--------------------------------
    'timezone' => 'Asia/Tehran',

    //--------------------------------
    // Soap configuration
    //--------------------------------
    'soap' => array(
        'attempts' => 2 // Attempts if soap connection is fail
    ),

    //--------------------------------
    // Database configuration
    //--------------------------------
    'database' => array(
        'host'     => '127.0.0.1',
        'dbname'   => '',
        'username' => '',
        'password' => '',
        'create' => true             // For first time you must set this to true for create tables in database
    ),

    //--------------------------------
    // Zarinpal gateway
    //--------------------------------
    'zarinpal' => array(
        'merchant-id'  => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx',
        'type'         => 'zarin-gate',                           // Types: [zarin-gate || normal]
        'callback-url' => 'http://www.example.org/result',
        'server'       => 'germany',                              // Servers: [germany || iran]
        'email'        => 'email@gmail.com',
        'mobile'       => '09xxxxxxxxx',
        'description'  => 'description',
    ),

    //--------------------------------
    // Mellat gateway
    //--------------------------------
    'mellat' => array(
        'username'     => '',
        'password'     => '',
        'terminalId'   => 0000000,
        'callback-url' => 'http://www.example.org/result',
        'user-mobile'  => '989xxxxxxxx'
    ),

    //--------------------------------
    // Payline gateway
    //--------------------------------
    'payline' => array(
        'api' => 'xxxxx-xxxxx-xxxxx-xxxxx-xxxxxxxxxxxxxxxxxxxxxxxxxxxx',
        'callback-url' => 'http://www.example.org/result'
    ),

    //--------------------------------
    // Sadad gateway
    //--------------------------------
    'sadad' => array(
        'merchant'      => '',
        'transactionKey'=> '',
        'terminalId'    => 000000000,
        'callback-url'  => 'http://example.org/result',
        'user-mobile'   => '09xxxxxxxxx'
    ),

    //--------------------------------
    // JahanPay gateway
    //--------------------------------
    'jahanpay' => array(
        'api' => 'xxxxxxxxxxx',
        'callback-url' => 'http://example.org/result'
    ),

    //--------------------------------
    // Parsian gateway
    //--------------------------------
    'parsian' => array(
        'pin'          => 'xxxxxxxxxxxxxxxxxxxx',
        'callback-url' => 'http://example.org/result'
    ),

    //--------------------------------
    // Pasargad gateway
    //--------------------------------
    'pasargad' => array(
        'merchant-code' => '9999999',
        'terminal-code' => '999999',
        'certificate' => '',
        'callback-url' => 'http://example.org/result'
    ),

    //--------------------------------
    // Saderat gateway
    //--------------------------------
    'saderat' => array(
        'merchant-id' => '999999999999999',
        'terminal-id' => '99999999',
        'public-key' => __DIR__.'/saderat-public-key.pem',
        'private-key' => __DIR__.'/saderat-private-key.pem',
        'callback-url' => 'http://example.org/result'
    ),

    //--------------------------------
    // IranKish gateway
    //--------------------------------
    'irankish' => array(
        'merchant-id' => 'xxxx',
        'sha1-key' => 'xxxxxxxxxxxxxxxxxxxx',
        'description' => 'description',
        'callback-url' => 'http://example.org/result'
    ),

    //--------------------------------
    // Simulator gateway
    //--------------------------------
    'simulator' => array(
        'callback-url' => 'http://example.org/result'
    ),

    //--------------------------------
    // Saman gateway
    //--------------------------------
    'saman' => array(
        'merchant-id' => 'xxxxx',
        'callback-url' => 'http://example.org/result'
    ),

    // Pay gateway
    //--------------------------------
    'pay' => array(
        'api' => 'xxxxx-xxxxx-xxxxx-xxxxx-xxxxxxxxxxxxxxxxxxxxxxxxxxxx',
        'callback-url' => 'http://www.example.org/result'
    ),

    // JiBit gateway
    //--------------------------------
    'jibit' => array(
        'merchant-id' => 'xxxx',
        'password' => 'xxxxxxxxxx',
        'callback-url' => 'http://www.example.org/result',
        'user-mobile' => '09xxxxxxxxx'
    ),

    // AP gateway
    //--------------------------------
    'ap' => array(
        'merchant-config-id' => 'xxxx',
        'username' => 'xxxxxxxxxx',
        'password' => 'xxxxxxxxxx',
        'callback-url' => 'http://www.example.org/result',
        'encryption-key' => 'xxxxxxxxxx',
        'encryption-vector' => 'xxxxxxxxxx',
        'sync-time' => false,
        'user-mobile' => '09xxxxxxxxx'
    ),

	// BitPay gateway
	//--------------------------------
    'bitpay' => array(
	    'api' => 'xxxxx-xxxxx-xxxxx-xxxxx-xxxxxxxxxxxxxxxxxxxxxxxxxxxx',
	    'callback-url' => 'http://www.example.org/result',
	    'name' => 'xxxxxxxxxx',
	    'email' => 'email@gmail.com',
	    'description' => 'description',
        'user-mobile' => '09xxxxxxxx'
    ),

    // IDPay gateway
    //--------------------------------
    'idpay' => array(
        'api' => 'x-x-x-x-x',
        'callback-url' => 'http://www.example.org/result',
        'sandbox'=> false,
        'name' => 'name',
        'email' => 'email',
        'description' => 'description',
        'user-mobile' => '09xxxxxxxx',
    ),
);
