<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Customer\Customer;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerCreatedMessagePayload extends MessagePayload
{
    public const FIELD_CUSTOMER = 'customer';

    /**
     * @return null|Customer
     */
    public function getCustomer();

    public function setCustomer(?Customer $customer): void;
}
