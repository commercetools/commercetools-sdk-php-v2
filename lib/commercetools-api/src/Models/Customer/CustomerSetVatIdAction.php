<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerSetVatIdAction extends CustomerUpdateAction
{
    public const FIELD_VAT_ID = 'vatId';

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getVatId();

    /**
     * @param ?string $vatId
     */
    public function setVatId(?string $vatId): void;
}
