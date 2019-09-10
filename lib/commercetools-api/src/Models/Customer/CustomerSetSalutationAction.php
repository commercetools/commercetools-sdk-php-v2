<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

interface CustomerSetSalutationAction extends CustomerUpdateAction
{
    const FIELD_SALUTATION = 'salutation';

    /**
     * @return null|string
     */
    public function getSalutation();

    public function setSalutation(?string $salutation): void;
}
