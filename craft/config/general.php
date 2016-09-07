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
    ),

    'localhost' => array(
        'devMode' => true,
    	'environmentVariables' => array(
			'basePath' => '/var/www/html/dev/www/',
	        'baseUrl' => 'http://localhost/dev/www/',
	    )
    ),

    'dev.jimchristie.me' => array(
        'environmentVariables' => array(
			'basePath' => '/home/www/jimchristie.me/subdomains/dev',
	        'baseUrl' => 'http://dev.jimchristie.me',
	    )
    ),
);
