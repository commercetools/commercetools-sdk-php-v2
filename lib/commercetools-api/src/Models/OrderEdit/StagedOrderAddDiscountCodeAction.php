<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderAddDiscountCodeAction extends StagedOrderUpdateAction
{
    const FIELD_CODE = 'code';

    /**
     * @return null|string
     */
    public function getCode();

    public function setCode(?string $code): void;
}
