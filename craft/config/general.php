<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(

	'*' => array(
        'omitScriptNameInUrls' => true,
        'environmentVariables' => array(
            'prod' => false,
            'siteName' => 'Jim Christie',
        )
    ),

    'jimchristie.me' => array(
        'environmentVariables' =>array(
            'prod' => true,
            'basePath' => 'home/www/jimchristie.me',
            'baseUrl' => 'https://jimchristie.me',
        )
    ),

    'localhost' => array(
        'devMode' => true,
    	'environmentVariables' => array(
			'basePath' => '/var/www/html/dev/www/',
	        'baseUrl' => 'http://localhost/dev/www/',
            'siteName' => 'Local Dev Site',
	    )
    ),

    'dev.jimchristie.me' => array(
        'devMode' => true,
        'environmentVariables' => array(
            'prod' => false,
			'basePath' => '/home/www/jimchristie.me/subdomains/dev',
	        'baseUrl' => 'http://dev.jimchristie.me',
            'siteName' => 'Jim Christie Dev',
	    )
    ),
    'baffledhuman' => array(
        'environmentVariables' => array(
            'prod' => true,
            'basePath' => '/home/www/baffledhuman.com/www',
            'baseUrl' => 'http://baffledhuman.com',
            'siteName' => 'Baffled Human',
        )
    )
);
