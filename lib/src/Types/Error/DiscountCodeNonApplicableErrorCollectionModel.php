<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Error;

use Commercetools\Types\Error\ErrorObjectCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DiscountCodeNonApplicableErrorCollectionModel extends ErrorObjectCollectionModel implements DiscountCodeNonApplicableErrorCollection {

    /**
     * @param DiscountCodeNonApplicableError $value
     * @return DiscountCodeNonApplicableErrorCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountCodeNonApplicableError) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountCodeNonApplicableError
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountCodeNonApplicableError) {
            $data = $this->mapData(DiscountCodeNonApplicableError::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
