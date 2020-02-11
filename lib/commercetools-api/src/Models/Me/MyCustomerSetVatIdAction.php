<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface MyCustomerSetVatIdAction extends MyCustomerUpdateAction
{

    public const FIELD_VAT_ID = 'vatId';

    /**
     * @return null|string
     */
    public function getVatId();

    public function setVatId(?string $vatId): void;
}
