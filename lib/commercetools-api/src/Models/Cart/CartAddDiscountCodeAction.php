<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartAddDiscountCodeAction extends CartUpdateAction
{
    public const FIELD_CODE = 'code';

    /**
     * @return null|string
     */
    public function getCode();

    public function setCode(?string $code): void;
}
