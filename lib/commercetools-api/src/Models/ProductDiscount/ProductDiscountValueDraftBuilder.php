<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductDiscountValueDraft>
 */
final class ProductDiscountValueDraftBuilder implements Builder
{
    public function build(): ProductDiscountValueDraft
    {
        return new ProductDiscountValueDraftModel(
        );
    }

    public static function of(): ProductDiscountValueDraftBuilder
    {
        return new self();
    }
}
