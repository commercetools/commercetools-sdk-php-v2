<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductVariantSelection>
 */
final class ProductVariantSelectionBuilder implements Builder
{
    public function build(): ProductVariantSelection
    {
        return new ProductVariantSelectionModel(
        );
    }

    public static function of(): ProductVariantSelectionBuilder
    {
        return new self();
    }
}
