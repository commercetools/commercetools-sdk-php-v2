<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductDiscountValueExternalDraft>
 */
final class ProductDiscountValueExternalDraftBuilder implements Builder
{




    public function build(): ProductDiscountValueExternalDraft
    {
        return new ProductDiscountValueExternalDraftModel(
        );
    }

    public static function of(): ProductDiscountValueExternalDraftBuilder
    {
        return new self();
    }
}
