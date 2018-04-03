<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ProductTypeCollectionModel extends JsonCollection implements ProductTypeCollection {

    /**
     * @param ProductType $value
     * @return ProductTypeCollection
     */
    public function add($value) {
        if (!$value instanceof ProductType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductType) {
            $data = $this->mapData(ProductType::class, $data);
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
     * @return ProductType
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}
