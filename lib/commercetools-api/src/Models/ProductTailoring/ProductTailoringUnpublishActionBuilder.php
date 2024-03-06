<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTailoringUnpublishAction>
 */
final class ProductTailoringUnpublishActionBuilder implements Builder
{
    public function build(): ProductTailoringUnpublishAction
    {
        return new ProductTailoringUnpublishActionModel(
        );
    }

    public static function of(): ProductTailoringUnpublishActionBuilder
    {
        return new self();
    }
}
