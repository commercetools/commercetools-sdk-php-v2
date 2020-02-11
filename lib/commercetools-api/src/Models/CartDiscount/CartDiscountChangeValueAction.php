<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CartDiscountChangeValueAction extends CartDiscountUpdateAction
{

    public const FIELD_VALUE = 'value';

    /**
     * @return null|CartDiscountValueDraft
     */
    public function getValue();

    public function setValue(?CartDiscountValueDraft $value): void;
}
