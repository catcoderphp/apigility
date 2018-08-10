<?php
return [
    'service_manager' => [
        'factories' => [
            \CartLib\V1\Rest\Cart\CartResource::class => \CartLib\V1\Rest\Cart\CartResourceFactory::class,
            \CartLib\V1\Rest\Cart\Mapper\ArrayMapper::class => \CartLib\V1\Rest\Cart\Mapper\Factory\ArrayMapperFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'cart-lib.rest.cart' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/cart[/:cart_id]',
                    'defaults' => [
                        'controller' => 'CartLib\\V1\\Rest\\Cart\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'cart-lib.rest.cart',
        ],
    ],
    'zf-rest' => [
        'CartLib\\V1\\Rest\\Cart\\Controller' => [
            'listener' => \CartLib\V1\Rest\Cart\CartResource::class,
            'route_name' => 'cart-lib.rest.cart',
            'route_identifier_name' => 'cart_id',
            'collection_name' => 'cart',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => '1',
            'page_size_param' => null,
            'entity_class' => \CartLib\V1\Rest\Cart\CartEntity::class,
            'collection_class' => \CartLib\V1\Rest\Cart\CartCollection::class,
            'service_name' => 'Cart',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'CartLib\\V1\\Rest\\Cart\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'CartLib\\V1\\Rest\\Cart\\Controller' => [
                0 => 'application/vnd.cart-lib.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'CartLib\\V1\\Rest\\Cart\\Controller' => [
                0 => 'application/vnd.cart-lib.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \CartLib\V1\Rest\Cart\CartEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cart-lib.rest.cart',
                'route_identifier_name' => 'cart_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \CartLib\V1\Rest\Cart\CartCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cart-lib.rest.cart',
                'route_identifier_name' => 'cart_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-content-validation' => [
        'CartLib\\V1\\Rest\\Cart\\Controller' => [
            'input_filter' => 'CartLib\\V1\\Rest\\Cart\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'CartLib\\V1\\Rest\\Cart\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'name',
                'description' => 'name',
                'field_type' => 'string',
            ],
        ],
    ],
];
