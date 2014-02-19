<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Main page.
 *
 * This page contains a webform to add a line to the input file
 * and displays the last few lines from the output file.
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

?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html>
    <head>
        <title>Flapper</title>
    </head>
    <body>
        <h1>Flapper</h1>
        <form enctype='multipart/form-data' method='post' action='input.php'>
            Input text :
            <input name='input' type='text' size='20' />
            <input name='submit' type='submit' value='Submit' />
        </form>
<?php

// print last n lines of file
$maxLines = 10;
$myFile = "input.txt";

// code based on a suggestion by http://stackoverflow.com/users/296308/lotus-notes
// on http://stackoverflow.com/questions/2961618/how-to-read-only-5-last-line-of-the-text-file-in-php
$data = array_slice(file($myFile), -1 * $maxLines);

echo "<h2>Last " . count($data) . " lines :</h2>";

foreach ($data as $line) {
    echo htmlspecialchars($line) . "<br />";
}
?>
</body>
</html>
