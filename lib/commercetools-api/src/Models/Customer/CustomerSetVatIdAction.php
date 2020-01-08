<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

interface CustomerSetVatIdAction extends CustomerUpdateAction
{
    const FIELD_VAT_ID = 'vatId';

    /**
     * <p>If not defined, the vat Id is unset.</p>.
     *
     * @return null|string
     */
    public function getVatId();

    public function setVatId(?string $vatId): void;
}
