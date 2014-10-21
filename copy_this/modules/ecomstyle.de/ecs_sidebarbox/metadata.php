<?php
/*    Please retain this copyright header in all versions of the software
 *
 *    Copyright (C) 2014  Josef A. Puckl | eComStyle.de
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see {http://www.gnu.org/licenses/}.
 */
$sMetadataVersion = '1.1';
$aModule = array(
    'id'            => 'ecs_sidebarbox',
    'title'         => '<strong style="color:#04B431;">e</strong><strong>ComStyle.de</strong>:  <i>easySidebarBox</i>',
    'description'   => array(
                    'de' => 'Einfach eine neue Sidebarbox anlegen! Nehmen Sie die erforderlichen Einstellungen in den Moduleinstellungen vor.
                    <br><iframe frameborder="no" width="600px" height="400px" src="https://ssl-account.com/incl.oxidtheme.de/gratis.html"></iframe>',
    ),
    'version'       => '1.1',
    'thumbnail'     => 'ecomstyle.png',
    'author'        => '<strong style="font-size: 17px;color:#04B431;">e</strong><strong style="font-size: 16px;">ComStyle.de</strong>',
    'email'         => 'info@ecomstyle.de',
    'url'           => 'http://ecomstyle.de',
    'extend'        => array(
    ),
    'blocks' => array(
        array('template' => 'layout/sidebar.tpl', 'block'=>'sidebar', 'file'=>'/views/blocks/sidebarbox.tpl'),
    ),
    'settings' => array(
        array('group' => 'ecs_main', 'name' => 'ecs_sbb_title', 'type' => 'str', 'position' => 1,  'value' => 'easySidebarBox'),
        array('group' => 'ecs_main', 'name' => 'ecs_sbb_text', 'type' => 'str', 'position' => 2,  'value' => 'Shopthemes, Mobilethemes, Module und Dienstleistungen finden Sie unter <a href="http://ecomstyle.de/">http://ecomstyle.de</a>'),
        array('group' => 'ecs_main', 'name' => 'ecs_sbb_ident', 'type' => 'str', 'position' => 3,  'value' => 'sidebarbox'),
    ),
);
?>