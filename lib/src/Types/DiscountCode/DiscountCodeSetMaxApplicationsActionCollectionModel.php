<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Types\DiscountCode\DiscountCodeUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class DiscountCodeSetMaxApplicationsActionCollectionModel extends DiscountCodeUpdateActionCollectionModel implements DiscountCodeSetMaxApplicationsActionCollection {

    /**
     * @param DiscountCodeSetMaxApplicationsAction $value
     * @return DiscountCodeSetMaxApplicationsActionCollection
     */
    public function add($value) {
        if (!$value instanceof DiscountCodeSetMaxApplicationsAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return DiscountCodeSetMaxApplicationsAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof DiscountCodeSetMaxApplicationsAction) {
            $data = $this->mapData(DiscountCodeSetMaxApplicationsAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
