<?php defined('SYSPATH') or die('No direct access allowed.');
 
return array
(
    'default' => array
    (
        'type'       => 'MySQLi',
        'connection' => array(
            'hostname'   => '127.0.0.1',
            'database'   => 'kohana_blog',
            'username'   => 'thierryrene',
            'password'   => '',
            'persistent' => FALSE,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
        'profiling'    => TRUE,
    )
);