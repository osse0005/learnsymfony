<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 14-11-21
 * Time: 12:05 PM
 */
namespace First\FirstBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class RandomController{

    public function indexAction($limit){
        return new Response('<html><body>Number: '.rand(1, $limit).'</body></html>');
    }
}