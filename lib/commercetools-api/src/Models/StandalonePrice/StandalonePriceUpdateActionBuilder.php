<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StandalonePriceUpdateAction>
 */
final class StandalonePriceUpdateActionBuilder implements Builder
{
    public function build(): StandalonePriceUpdateAction
    {
        return new StandalonePriceUpdateActionModel(
        );
    }

    public static function of(): StandalonePriceUpdateActionBuilder
    {
        return new self();
    }
}
