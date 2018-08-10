<?php
namespace CartLib\V1\Rest\Cart;


use CartLib\V1\Rest\Cart\Mapper\ArrayMapper;
use CartLib\V1\Rest\Cart\Mapper\Factory\ArrayMapperFactory;

class CartResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ArrayMapper::class);
        return new CartResource($mapper);
    }
}
