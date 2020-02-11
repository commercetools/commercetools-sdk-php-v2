<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Customer\Customer;

interface CustomerCreatedMessagePayload extends MessagePayload
{

    public const FIELD_CUSTOMER = 'customer';

    /**
     * @return null|Customer
     */
    public function getCustomer();

    public function setCustomer(?Customer $customer): void;
}
