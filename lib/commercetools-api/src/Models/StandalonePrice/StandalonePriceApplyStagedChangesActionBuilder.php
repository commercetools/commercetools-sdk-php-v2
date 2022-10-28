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
 * @implements Builder<StandalonePriceApplyStagedChangesAction>
 */
final class StandalonePriceApplyStagedChangesActionBuilder implements Builder
{
    public function build(): StandalonePriceApplyStagedChangesAction
    {
        return new StandalonePriceApplyStagedChangesActionModel(
        );
    }

    public static function of(): StandalonePriceApplyStagedChangesActionBuilder
    {
        return new self();
    }
}
