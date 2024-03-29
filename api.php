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

/* Example filter */
// Uncomment this filter to convert the content to uppercase
//Jojo::addFilter('content', 'upperCaseEverything', 'jojo_hello');

/* Register URI patterns */
Jojo::registerURI("hello/[name:string]", 'Jojo_Plugin_Jojo_hello'); // "hello/name"

$_provides['Jojo_Plugin_Jojo_hello'] = array(
        'Jojo_Plugin_Jojo_hello' => 'Hello - Hello Demo Page',
        );