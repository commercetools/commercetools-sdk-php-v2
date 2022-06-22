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
 * @implements Builder<ProductVariantSelectionType>
 */
final class ProductVariantSelectionTypeBuilder implements Builder
{
    public function build(): ProductVariantSelectionType
    {
        return new ProductVariantSelectionTypeModel(
        );
    }

    public static function of(): ProductVariantSelectionTypeBuilder
    {
        return new self();
    }
}
