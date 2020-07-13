<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReviewSetCustomerAction extends ReviewUpdateAction
{
    public const FIELD_CUSTOMER = 'customer';

    /**
     * <p>The customer who created the review.
     * If <code>customer</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer();

    /**
     * @param ?CustomerResourceIdentifier $customer
     */
    public function setCustomer(?CustomerResourceIdentifier $customer): void;
}
