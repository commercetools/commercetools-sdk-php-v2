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
 * @implements Builder<ProductSelectionType>
 */
final class ProductSelectionTypeBuilder implements Builder
{
    public function build(): ProductSelectionType
    {
        return new ProductSelectionTypeModel(
        );
    }

    public static function of(): ProductSelectionTypeBuilder
    {
        return new self();
    }
}
