<?php
/**
   AbanteCart, Ideal OpenSource Ecommerce Solution
   https://www.AbanteCart.com
   Copyright © 2011-2023 Belavier Commerce LLC

   Released under the Open Software License (OSL 3.0)
*/

const SERVER_NAME = 'localhost';
// Admin Section Configuration. You can change this value to any name. Will use ?s=name to access the admin
const ADMIN_PATH = 'admin123';

// Database Configuration
const DB_DRIVER = 'amysqli';
const DB_HOSTNAME = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
const DB_DATABASE = 'abantecart';
const DB_PREFIX = 'abc_';

const CACHE_DRIVER = 'file';
// Unique AbanteCart store ID
const UNIQUE_ID = '9c84513d90ef462e3282a97422fa08ff';
// Encryption key for protecting sensitive information. NOTE: Change of this key will cause a loss of all existing encrypted information!
const ENCRYPTION_KEY = 'HbRaow';

// details about allowed DSN settings  https://symfony.com/doc/6.0/mailer.html#transport-setup
/*
const MAILER = [
    //'dsn' => null,
    // OR
    'protocol' => 'smtp', // or ses+smtp, gmail+smtp, mandrill+smtp, mailgun+smtp, mailjet+smtp, postmark+smtp, sendgrid+smtp, sendinblue+smtp, ohmysmtp+smtp
    //we use "username" also as ID, KEY, API_TOKEN, ACCESS_KEY
    'username' => 'merchant@yourdomain.com',
    'password' => '****super-secret-password****',
    'host'     => 'your-hostname',
    'port'     => 465 //or 587 etc
];
*/