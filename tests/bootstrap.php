<?php
/*
 * This file is part of the PhpFlot package.
 *
 * (c) 2016 Loogaroo
 *
 * For the full copyright and license information, please view the LICENSE
 * file
 */
if (!$loader = @include __DIR__.'/../vendor/autoload.php') {
    die('You must set up the project dependencies, run the following commands:'.PHP_EOL.
        'curl -s http://getcomposer.org/installer | php'.PHP_EOL.
        'php composer.phar install'.PHP_EOL);
}
$loader->add('PhpFlot\Test', __DIR__);