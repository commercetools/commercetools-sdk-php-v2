<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductDiscount;

use Commercetools\Base\JsonCollection;

class ProductDiscountCollectionModel extends JsonCollection implements ProductDiscountCollection {

    /**
     * @param ProductDiscount $value
     * @return ProductDiscountCollection
     */
    public function add($value) {
        if (!$value instanceof ProductDiscount) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductDiscount
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductDiscount) {
            $data = $this->mapData(ProductDiscount::class, $data);
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
     * @return ProductDiscount
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}
