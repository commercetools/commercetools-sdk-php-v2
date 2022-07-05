<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCustomerSetVatIdAction extends MyCustomerUpdateAction
{
    public const FIELD_VAT_ID = 'vatId';

    /**

     * @return null|string
     */
    public function getVatId();

    /**
     * @param ?string $vatId
     */
    public function setVatId(?string $vatId): void;
}
