flapper-web
===========

Web interface for flapper project

Writes a text, submitted by a form to an input file
and displays the last n lines of the output file.

Usage
-----

- Copy folder to a path reachable by the webserver, fe. /var/www/html

- Modify the config file to set path to input and output file.

Remark : the files should be readable by the user running the webserver,
the inputfile should also be writable :

<pre>
 chgrp www-data /path/to/input.txt
 chmod g+rw /path/to/input.txt
</pre>

License
-------

Copyright (C) 2014 Dieter Adriaenssens <ruleant@users.sourceforge.net>

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
