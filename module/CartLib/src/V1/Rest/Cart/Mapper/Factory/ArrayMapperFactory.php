<?php
/**
 * Created by PhpStorm.
 * User: catcoder
 * Date: 10/08/18
 * Time: 06:17 PM
 */

namespace CartLib\V1\Rest\Cart\Mapper\Factory;


use CartLib\V1\Rest\Cart\Mapper\ArrayMapper;

class ArrayMapperFactory
{
    public function __invoke($services)
    {
        return new ArrayMapper();
    }
}