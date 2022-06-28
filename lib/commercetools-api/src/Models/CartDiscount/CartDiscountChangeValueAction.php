<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartDiscountChangeValueAction extends CartDiscountUpdateAction
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>New value to set.</p>
     *
     * @return null|CartDiscountValueDraft
     */
    public function getValue();

    /**
     * @param ?CartDiscountValueDraft $value
     */
    public function setValue(?CartDiscountValueDraft $value): void;
}
