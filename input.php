<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Input script
 *
 * This scripts reads the input parameter sent by the webform
 * and appends it to a file.
 *
 * PHP version 5
 *
 * Copyright (C) 2014 Dieter Adriaenssens <ruleant@users.sourceforge.net>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @category  Web
 * @package   Flapper
 * @author    Dieter Adriaenssens <ruleant@users.sourceforge.net>
 * @copyright 2014 Dieter Adriaenssens
 * @license   http://www.gnu.org/copyleft/gpl.html GPL
 * @version   GIT: 0.1-dev
 * @link      https://github.com/ruleant/flapper-web
 */

// read input var
if (! empty($_REQUEST["input"])) {
    $input = $_REQUEST["input"];

    // append input to file
    $myFile = "input.txt";
    $fh = fopen($myFile, 'a') or die("can't open file");
    fwrite($fh, $input . "\n");
    fclose($fh);
}

// redirect to start page
header('Location: index.php');
?>
