<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\QuoteRequest;

use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface QuoteRequestChangeCustomerAction extends QuoteRequestUpdateAction
{
    public const FIELD_CUSTOMER = 'customer';

    /**
     * <p>New Customer to own the Quote Request.</p>
     *

     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer();

    /**
     * @param ?CustomerResourceIdentifier $customer
     */
    public function setCustomer(?CustomerResourceIdentifier $customer): void;
}
