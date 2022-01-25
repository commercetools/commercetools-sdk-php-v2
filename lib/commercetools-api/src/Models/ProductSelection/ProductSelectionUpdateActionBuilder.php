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
 * @implements Builder<ProductSelectionUpdateAction>
 */
final class ProductSelectionUpdateActionBuilder implements Builder
{
    public function build(): ProductSelectionUpdateAction
    {
        return new ProductSelectionUpdateActionModel(
        );
    }

    public static function of(): ProductSelectionUpdateActionBuilder
    {
        return new self();
    }
}
