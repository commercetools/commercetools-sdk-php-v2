<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StandalonePriceDeletedMessagePayload>
 */
final class StandalonePriceDeletedMessagePayloadBuilder implements Builder
{
    public function build(): StandalonePriceDeletedMessagePayload
    {
        return new StandalonePriceDeletedMessagePayloadModel(
        );
    }

    public static function of(): StandalonePriceDeletedMessagePayloadBuilder
    {
        return new self();
    }
}
