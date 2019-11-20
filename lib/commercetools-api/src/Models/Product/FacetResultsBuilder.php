<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;

/**
 * @implements Builder<FacetResults>
 */
final class FacetResultsBuilder implements Builder
{
    public function build(): FacetResults
    {
        return new FacetResultsModel(
        );
    }

    public static function of(): FacetResultsBuilder
    {
        return new self();
    }
}
