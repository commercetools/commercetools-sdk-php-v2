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
 * @implements Builder<FacetResult>
 */
final class FacetResultBuilder implements Builder
{




    public function build(): FacetResult
    {
        return new FacetResultModel(
        );
    }

    public static function of(): FacetResultBuilder
    {
        return new self();
    }
}
