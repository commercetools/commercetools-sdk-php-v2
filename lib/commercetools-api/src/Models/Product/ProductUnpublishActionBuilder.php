<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductUnpublishAction>
 */
final class ProductUnpublishActionBuilder implements Builder
{
    public function build(): ProductUnpublishAction
    {
        return new ProductUnpublishActionModel(
        );
    }

    public static function of(): ProductUnpublishActionBuilder
    {
        return new self();
    }
}
