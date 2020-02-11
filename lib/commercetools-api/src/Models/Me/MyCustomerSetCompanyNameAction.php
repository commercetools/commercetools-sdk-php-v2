<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCustomerSetCompanyNameAction extends MyCustomerUpdateAction
{
    public const FIELD_COMPANY_NAME = 'companyName';

    /**
     * @return null|string
     */
    public function getCompanyName();

    public function setCompanyName(?string $companyName): void;
}
