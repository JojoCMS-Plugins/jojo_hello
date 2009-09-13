<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007-2008 Harvey Kane <code@ragepank.com>
 * Copyright 2007-2008 Michael Holt <code@gardyneholt.co.nz>
 * Copyright 2007 Melanie Schulz <mel@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @author  Michael Cochrane <mikec@jojocms.org>
 * @author  Melanie Schulz <mel@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 * @package jojo_hello
 */

class Jojo_Plugin_Jojo_hello extends Jojo_Plugin
{
    function _getContent()
    {
        global $smarty;
        $content = array();

        /* read the name from the GET data */
        $name = Jojo::getFormData('name', '');

        /* uppercase the first letter of each word for formatting purposes */
        $name = ucwords($name);

        if (!empty($name)) {
            /* replace dashes with spaces */
            $name = str_replace('-', ' ', $name);
            
            /* set the page variables */
            $content['title']    = 'Hello '.$name; //title is the H1 heading
            $content['seotitle'] = 'Hello '.$name; //SEO title is the title of the page (shows in Google results and the taskbar)
        }
        
        /* make the name available to Smarty so we can use {$name} in the template */
        $smarty->assign('name',$name);
        
        /* execute the template */
        $content['content'] = $smarty->fetch('jojo_hello.tpl');

        return $content;
    }

    function upperCaseEverything($data)
    {
        if (strpos(_SITEURI, 'manage-plugins') !== false) {
            /* Don't uppercase the manage plugins page, breaks the javascript
               and you can't disable this plugin again */
            return $data;
        }

        return strtoupper($data);
    }

    function getCorrectUrl()
    {
        //Assume the URL is correct
        return _PROTOCOL.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    }

}