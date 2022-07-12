<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductDiscountChangeValueAction extends ProductDiscountUpdateAction
{
    public const FIELD_VALUE = 'value';

    /**
     * <p>New value to set. Must not be empty.</p>
     *

     * @return null|ProductDiscountValueDraft
     */
    public function getValue();

    /**
     * @param ?ProductDiscountValueDraft $value
     */
    public function setValue(?ProductDiscountValueDraft $value): void;
}
