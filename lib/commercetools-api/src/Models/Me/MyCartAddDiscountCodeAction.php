<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface MyCartAddDiscountCodeAction extends MyCartUpdateAction
{

    public const FIELD_CODE = 'code';

    /**
     * @return null|string
     */
    public function getCode();

    public function setCode(?string $code): void;
}
