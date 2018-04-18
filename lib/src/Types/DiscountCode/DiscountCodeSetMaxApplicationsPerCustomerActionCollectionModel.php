<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DiscountCodeSetMaxApplicationsPerCustomerActionCollectionModel extends DiscountCodeUpdateActionCollectionModel implements DiscountCodeSetMaxApplicationsPerCustomerActionCollection {

    /**
     * @param DiscountCodeSetMaxApplicationsPerCustomerAction $value
     * @return DiscountCodeSetMaxApplicationsPerCustomerActionCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountCodeSetMaxApplicationsPerCustomerAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountCodeSetMaxApplicationsPerCustomerAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountCodeSetMaxApplicationsPerCustomerAction) {
            $data = $this->mapData(DiscountCodeSetMaxApplicationsPerCustomerAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
