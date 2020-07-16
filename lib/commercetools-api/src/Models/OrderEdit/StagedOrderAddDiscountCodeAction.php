<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderAddDiscountCodeAction extends StagedOrderUpdateAction
{
    public const FIELD_CODE = 'code';

    /**
     * @return null|string
     */
    public function getCode();

    /**
     * @param ?string $code
     */
    public function setCode(?string $code): void;
}
