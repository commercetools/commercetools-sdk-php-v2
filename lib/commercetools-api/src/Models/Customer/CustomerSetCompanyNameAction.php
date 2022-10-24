<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerSetCompanyNameAction extends CustomerUpdateAction
{
    public const FIELD_COMPANY_NAME = 'companyName';

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getCompanyName();

    /**
     * @param ?string $companyName
     */
    public function setCompanyName(?string $companyName): void;
}
