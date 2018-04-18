<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\ResourceCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductCollectionModel extends ResourceCollectionModel implements ProductCollection {

    /**
     * @param Product $value
     * @return ProductCollection
     */
    public function add($value) {
        if (!$value instanceof Product) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Product
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Product) {
            $data = $this->mapData(Product::class, $data);
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
     * @return Product
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}
