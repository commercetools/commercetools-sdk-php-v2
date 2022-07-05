<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerSetCustomerNumberAction extends CustomerUpdateAction
{
    public const FIELD_CUSTOMER_NUMBER = 'customerNumber';

    /**
     * <p>It should be <strong>unique</strong> across a project.
     * Once it's set, it cannot be changed.</p>
     *

     * @return null|string
     */
    public function getCustomerNumber();

    /**
     * @param ?string $customerNumber
     */
    public function setCustomerNumber(?string $customerNumber): void;
}
