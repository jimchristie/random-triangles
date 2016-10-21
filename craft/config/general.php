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
            'prod' => false
        )
    ),

    'jimchristie.me' => array(
        'environmentVariables' =>array(
            'prod' => true,
            'basePath' => 'home/www/jimchristie.me',
            'baseUrl' => 'http://jimchristie.me'
        )
    ),

    'localhost' => array(
        'devMode' => true,
    	'environmentVariables' => array(
			'basePath' => '/var/www/html/dev/www/',
	        'baseUrl' => 'http://localhost/dev/www/',
	    )
    ),

    'dev.jimchristie.me' => array(
        'devMode' => true,
        'environmentVariables' => array(
            'prod' => false,
			'basePath' => '/home/www/jimchristie.me/subdomains/dev',
	        'baseUrl' => 'http://dev.jimchristie.me',
	    )
    ),
    'baffledhuman' => array(
        'environmentVariables' => array(
            'prod' => true,
            'basePath' => '/home/www/baffledhuman.com/www',
            'baseUrl' => 'http://baffledhuman.com',
        )
    )
);
