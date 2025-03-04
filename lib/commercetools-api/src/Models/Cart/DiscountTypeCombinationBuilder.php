<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountTypeCombination>
 */
final class DiscountTypeCombinationBuilder implements Builder
{
    public function build(): DiscountTypeCombination
    {
        return new DiscountTypeCombinationModel(
        );
    }

    public static function of(): DiscountTypeCombinationBuilder
    {
        return new self();
    }
}
