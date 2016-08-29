<?php
namespace Craft;

class TestPlugin extends BasePlugin
{
	  function getName()
    {
         return Craft::t('Test');
    }

    function getVersion()
    {
        return '1.0';
    }

    function getDeveloper()
    {
        return 'Pixel & Tonic';
    }

    function getDeveloperUrl()
    {
        return 'http://pixelandtonic.com';
    }
}
