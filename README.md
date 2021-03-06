## Introduction
`flopup-me` is demo repo.


## Install dependencies and configure:

### Now you'll need composer to install dependencies:
```bash
$ curl -sS https://getcomposer.org/installer | php
$ php composer.phar install
```

### Check everything works:
```bash
$ php ./app/check.php
```

### Create the database
Use Doctrine to create the database:
```bash
php app/console doctrine:database:create
```

### Run the PHP server:
```bash
php app/console server:run 192.168.0.1:8080
```

## Support and Bugs
If you are having problems, have found a bug, or want to contribute don't be shy.
[Open a ticket](https://github.com/LogIN-/flopup-me/issues) on GitHub.

## License
The MIT License (MIT)

Copyright (c) 2014

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.