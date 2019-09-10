<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

interface CustomerSetMiddleNameAction extends CustomerUpdateAction
{
    const FIELD_MIDDLE_NAME = 'middleName';

    /**
     * @return null|string
     */
    public function getMiddleName();

    public function setMiddleName(?string $middleName): void;
}
