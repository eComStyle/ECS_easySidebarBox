<?php

$aModule = array(
    'id'           => 'ecs_sidebarbox',
    'title'        => '<strong style="color:#04B431;">e</strong><strong>ComStyle.de</strong>:  <i>easySidebarBox</i>',
    'description'  => array(
        'de' => 'Einfach eine neue Sidebarbox anlegen! Nehmen Sie die erforderlichen Einstellungen in den Moduleinstellungen vor.
                <br><iframe frameborder="no" width="600px" height="400px" src="http://tinyurl.com/m23ozfo"></iframe>',
    ),
    'version'      => '1.0',
    'thumbnail'    => 'ecomstyle.png',
    'author'       => '<strong style="font-size: 17px;color:#04B431;">e</strong><strong style="font-size: 16px;">ComStyle.de</strong>',
    'email'        => 'info@ecomstyle.de',
    'url'          => 'http://ecomstyle.de',
    'extend'       => array(
        
    ),
        'blocks' => array(

        array('template' => 'layout/sidebar.tpl', 'block'=>'sidebar', 'file'=>'sidebarbox.tpl'),

    ),
    'settings' => array(
        array('group' => 'ecs_main', 'name' => 'ecs_sbb_title', 'type' => 'str', 'position' => 1,  'value' => 'easySidebarBox'),
        array('group' => 'ecs_main', 'name' => 'ecs_sbb_text', 'type' => 'str', 'position' => 2,  'value' => 'Shopthemes, Mobilethemes, Module und Dienstleistungen finden Sie unter <a href="http://ecomstyle.de/">http://ecomstyle.de</a>'),
        array('group' => 'ecs_main', 'name' => 'ecs_sbb_ident', 'type' => 'str', 'position' => 3,  'value' => 'sidebarbox'),

    ),

);
?>