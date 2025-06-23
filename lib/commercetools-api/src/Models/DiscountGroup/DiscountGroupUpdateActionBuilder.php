<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountGroup;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountGroupUpdateAction>
 */
final class DiscountGroupUpdateActionBuilder implements Builder
{
    public function build(): DiscountGroupUpdateAction
    {
        return new DiscountGroupUpdateActionModel(
        );
    }

    public static function of(): DiscountGroupUpdateActionBuilder
    {
        return new self();
    }
}
