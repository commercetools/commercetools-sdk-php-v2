<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\JsonCollection;

class ShippingMethodCollectionModel extends JsonCollection implements ShippingMethodCollection {

    /**
     * @param ShippingMethod $value
     * @return ShippingMethodCollection
     */
    public function add($value) {
        if (!$value instanceof ShippingMethod) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ShippingMethod
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ShippingMethod) {
            $data = $this->mapData(ShippingMethod::class, $data);
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
     * @return ShippingMethod
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}
