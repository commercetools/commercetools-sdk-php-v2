<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

interface MyCartAddDiscountCodeAction extends MyCartUpdateAction
{
    const FIELD_CODE = 'code';

    /**
     * @return null|string
     */
    public function getCode();

    public function setCode(?string $code): void;
}
