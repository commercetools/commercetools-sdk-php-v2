<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyCartAddDiscountCodeAction extends MyCartUpdateAction
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
