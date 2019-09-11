<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

interface MyCustomerSetVatIdAction extends MyCustomerUpdateAction
{
    const FIELD_VAT_ID = 'vatId';

    /**
     * @return null|string
     */
    public function getVatId();

    public function setVatId(?string $vatId): void;
}
