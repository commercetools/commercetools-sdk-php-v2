<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Review\ReviewUpdateActionModel;

use Commercetools\Types\Common\ResourceIdentifier;

class ReviewSetCustomerActionModel extends ReviewUpdateActionModel implements ReviewSetCustomerAction {
    const DISCRIMINATOR_VALUE = 'setCustomer';

    /**
     * @var ResourceIdentifier
     */
    protected $customer;

    /**
     * @return ResourceIdentifier
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            $value = $this->raw(ReviewSetCustomerAction::FIELD_CUSTOMER);
            if (is_null($value)) {
                return $this->mapData(ResourceIdentifier::class, null);
            }
            $value = $this->mapData(ResourceIdentifier::class, $value);

            $this->customer = $value;
        }
        return $this->customer;
    }

    /**
     * @param ResourceIdentifier $customer
     * @return $this
     */
    public function setCustomer(ResourceIdentifier $customer)
    {
        $this->customer = $customer;

        return $this;
    }

}
