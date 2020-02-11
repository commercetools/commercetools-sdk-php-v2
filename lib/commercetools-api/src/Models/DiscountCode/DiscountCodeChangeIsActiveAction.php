<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface DiscountCodeChangeIsActiveAction extends DiscountCodeUpdateAction
{

    public const FIELD_IS_ACTIVE = 'isActive';

    /**
     * @return null|bool
     */
    public function getIsActive();

    public function setIsActive(?bool $isActive): void;
}
