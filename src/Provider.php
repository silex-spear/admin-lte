<?php

namespace Spear\AdminLTE;

use Silex\ServiceProviderInterface;
use Silex\Application;

class Provider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        // TODO add TwigPathManager interface on Twig provider and check it
        if(isset($app['twig.path.manager']))
        {
            $app['twig.path.manager']->addPath(array(
                __DIR__ . '/../views/',
            ));
        }
    }

    public function boot(Application $app)
    {

    }
}
