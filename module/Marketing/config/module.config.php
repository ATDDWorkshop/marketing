<?php
/**
 * Created by PhpStorm.
 * User: gmeyenberg
 * Date: 13.04.2015
 * Time: 17:24
 */

return array(
    'controllers' => array(
        'invokables' => array(
            'Marketing\Controller\Marketing' => 'Marketing\Controller\MarketingController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'marketing' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/',

                    'defaults' => array(
                        'controller' => 'Marketing\Controller\Marketing',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'marketing' => __DIR__ . '/../view',
        ),
    ),
);