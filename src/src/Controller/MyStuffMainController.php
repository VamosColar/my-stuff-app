<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 29/01/2018
 * Time: 22:52
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class MyStuffMainController
{
    public function index()
    {
        return new Response(
            '<html><body>MyStuff Main Page</body></html>'
        );
    }
}