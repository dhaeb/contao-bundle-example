<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\SkeletonBundle\Tests;

use Contao\SkeletonBundle\HelloWorldBundle;
use PHPUnit\Framework\TestCase;

class HelloWorldBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new HelloWorldBundle();

        $this->assertInstanceOf('Contao\SkeletonBundle\HelloWorldBundle', $bundle);
    }
}
