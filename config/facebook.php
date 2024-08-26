<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Facebook App ID
    |--------------------------------------------------------------------------
    |
    | Your Facebook App ID can be found in the Facebook Developer Portal.
    |
    */

    'app_id' => env('FACEBOOK_APP_ID'),

    /*
    |--------------------------------------------------------------------------
    | Facebook App Secret
    |--------------------------------------------------------------------------
    |
    | Your Facebook App Secret can be found in the Facebook Developer Portal.
    |
    */

    'app_secret' => env('FACEBOOK_APP_SECRET'),

    /*
    |--------------------------------------------------------------------------
    | Default Graph API Version
    |--------------------------------------------------------------------------
    |
    | The version of the Graph API that your application will use.
    | Update this when you want to switch to a different version of the API.
    |
    */

    'default_graph_version' => 'v20.0',

    /*
    |--------------------------------------------------------------------------
    | Facebook Access Token
    |--------------------------------------------------------------------------
    |
    | The access token is required to make requests to the Facebook Graph API.
    | You can set this in your .env file as well.
    |
    */

    'access_token' => env('FACEBOOK_ACCESS_TOKEN'),

];
