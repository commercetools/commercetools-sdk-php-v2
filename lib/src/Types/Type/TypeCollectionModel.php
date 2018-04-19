<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\Common\ResourceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TypeCollectionModel extends ResourceCollectionModel implements TypeCollection
{

    /**
     * @param Type $value
     * @return TypeCollection
     */
    public function add($value) {
        if (!$value instanceof Type) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Type
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Type) {
            $data = $this->mapData(Type::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }

    protected function index($data)
    {
        foreach ($data as $key => $value) {
            if (isset($value['id'])) {
                $this->addToIndex('id', $value['id'], $key);
            }
        }
    }

    /**
     * @param string $id
     * @return Type
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }

}
