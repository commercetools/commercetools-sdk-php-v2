<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ShippingRateInputTypeCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CartClassificationTypeCollectionModel extends ShippingRateInputTypeCollectionModel implements CartClassificationTypeCollection
{

    /**
     * @param CartClassificationType $value
     * @return CartClassificationTypeCollection
     */
    public function add($value) {
        if (!$value instanceof CartClassificationType) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CartClassificationType
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CartClassificationType) {
            $data = $this->mapData(CartClassificationType::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
