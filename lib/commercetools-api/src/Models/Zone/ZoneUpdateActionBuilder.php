<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ZoneUpdateAction>
 */
final class ZoneUpdateActionBuilder implements Builder
{




    public function build(): ZoneUpdateAction
    {
        return new ZoneUpdateActionModel(
        );
    }

    public static function of(): ZoneUpdateActionBuilder
    {
        return new self();
    }
}
