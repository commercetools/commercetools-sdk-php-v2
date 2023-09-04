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
 * @implements Builder<StandalonePriceRemoveStagedChangesAction>
 */
final class StandalonePriceRemoveStagedChangesActionBuilder implements Builder
{
    public function build(): StandalonePriceRemoveStagedChangesAction
    {
        return new StandalonePriceRemoveStagedChangesActionModel(
        );
    }

    public static function of(): StandalonePriceRemoveStagedChangesActionBuilder
    {
        return new self();
    }
}
