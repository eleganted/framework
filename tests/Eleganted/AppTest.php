<?php

namespace Eleganted\Tests;

use Eleganted\{
    App\App,
    Http\Request
};
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    public function testRunApp()
    {
        $app = new App;

        $request = new Request;

        $app->run($request);
    }
}
