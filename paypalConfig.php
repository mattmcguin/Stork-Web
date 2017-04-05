<?php
    /*
        * Config for PayPal specific values
    */

    //Whether Sandbox environment is being used, Keep it true for testing
    define("SANDBOX_FLAG", true);

    //PayPal REST API endpoints
    define("SANDBOX_ENDPOINT", "https://api.sandbox.paypal.com");
    define("LIVE_ENDPOINT", "https://api.paypal.com");

    //Merchant ID
    define("MERCHANT_ID","9SGR6FNEW6KZQ");

    //PayPal REST App SANDBOX Client Id and Client Secret
    define("SANDBOX_CLIENT_ID" , "AQAeBmSZJypthacyHwQIteHhw6cTTlYvt4v8-c_zHazqivsaPk6h3t5wWOBbTW9-hDoQm8rH5SuuaXxr");
    define("SANDBOX_CLIENT_SECRET", "EGGi-F_FzCykA3nUa0hMZV-SAE6ZC6zGnsMsqGfpy0JB2DaF0QHIsHQBH1uNYTqUU8UKegm9hPkqr9nD");

    //Environments -Sandbox and Production/Live
    define("SANDBOX_ENV", "sandbox");
    define("LIVE_ENV", "production");

    //PayPal REST App SANDBOX Client Id and Client Secret
    define("LIVE_CLIENT_ID" , "live_Client_Id");
    define("LIVE_CLIENT_SECRET" , "live_Client_Secret");

    //ButtonSource Tracker Code
    define("SBN_CODE","PP-DemoPortal-EC-IC-php-REST");

?>