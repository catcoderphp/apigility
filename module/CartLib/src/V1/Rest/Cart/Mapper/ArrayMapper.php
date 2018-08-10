<?php
/**
 * Created by PhpStorm.
 * User: catcoder
 * Date: 10/08/18
 * Time: 06:14 PM
 */

namespace CartLib\V1\Rest\Cart\Mapper;


class ArrayMapper implements CartMapperInterface
{
    /**
     * @param array|\stdClass|\Traversable $data
     * @return Entity|void
     */
    public function create($data)
    {
        return [];
    }

    public function fetch($id)
    {
        return [];
    }

    public function fetchAll()
    {
        return (object)['jafet' => 'puto'];
    }

    public function delete($id)
    {
        return [];
    }

    public function update($id, $data)
    {
        return [];
    }


}