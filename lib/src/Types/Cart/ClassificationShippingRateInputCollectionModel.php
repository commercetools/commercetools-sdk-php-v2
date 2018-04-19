<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\ShippingRateInputCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ClassificationShippingRateInputCollectionModel extends ShippingRateInputCollectionModel implements ClassificationShippingRateInputCollection
{

    /**
     * @param ClassificationShippingRateInput $value
     * @return ClassificationShippingRateInputCollection
     */
    public function add($value) {
        if (!$value instanceof ClassificationShippingRateInput) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ClassificationShippingRateInput
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ClassificationShippingRateInput) {
            $data = $this->mapData(ClassificationShippingRateInput::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
