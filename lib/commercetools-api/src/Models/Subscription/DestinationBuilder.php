<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<Destination>
 */
final class DestinationBuilder implements Builder
{




    public function build(): Destination
    {
        return new DestinationModel(
        );
    }

    public static function of(): DestinationBuilder
    {
        return new self();
    }
}
