<?php

declare(strict_types=1);

namespace Tests\Support\Page\Acceptance;

class Login
{
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public $usernameField = '#username';
     * public $formSubmitButton = "#mainForm input[type=submit]";
     */
    public static $URL ='';
    public  static $emailaddressField='#email';
    public static  $passwordField ='#password';
    public static $loginButton = '//button[contains(text(),"Login")]';
    public static $checkbox = '//label[contains(text(),"Remember Me")]';
    public static $linkforgotpassword = '//a[contains(text(),"Forgot Your Password?")]';
 

}
