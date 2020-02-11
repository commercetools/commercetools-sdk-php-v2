<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;

interface PaymentSetCustomerAction extends PaymentUpdateAction
{

    public const FIELD_CUSTOMER = 'customer';

    /**
     * <p>A reference to the customer this payment belongs to.</p>
     *
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer();

    public function setCustomer(?CustomerResourceIdentifier $customer): void;
}
