<?php

/**
 * Configuration
 */
return [

    /**
     * Unique name that identifies your theme.
     */
    'name' => 'theme-dark',

    /**
     * Define menu positions.
     * Will be listed in the backend so that users
     * can assign menus to these positions.
     */
    'menus' => [

        'main' => 'Main',
        'offcanvas' => 'Offcanvas'

    ],

    /**
     * Define widget positions.
     * will be listed in the backend so that users
     * can publish widgets in these positions.
     */
     'positions' => [

         'hero' => 'Hero',
         'top' => 'Top',
         'bottom' => 'Bottom',
         'footer' => 'Footer',
         'offcanvas' => 'Offcanvas'

     ],


     /**
      * Node defaults
      */
     'node' => [

         'title_hide' => false,
         'title_large' => false,
         'alignment' => ''

     ],

     /**
      * Widget defaults
      */
     'widget' => [

         'title_hide' => true,
         'title_size' => 'uk-panel-title',
         'alignment' => '',
         'html_class' => '',
         'panel' => ''

     ],

    /**
     * Define theme configuration.
     * This is the theme's default configuration. During run-time, they will be merged with
     * settings the user has set in the backend. The default configuration can therefore
     * be overwritten.
     */
     'config' => [],

     /**
      * Events
      */
     'events' => [

         'view.system/site/admin/edit' => function ($event, $view) {
             $view->script('node-theme', 'theme:app/bundle/node-theme.js', 'site-edit');
         },

         'view.system/widget/edit' => function ($event, $view) {
             $view->script('widget-theme', 'theme:app/bundle/widget-theme.js', 'widget-edit');
         },

       ]

 ];
