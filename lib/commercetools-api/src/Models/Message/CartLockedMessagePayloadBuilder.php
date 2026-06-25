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
 * @implements Builder<CartLockedMessagePayload>
 */
final class CartLockedMessagePayloadBuilder implements Builder
{
    public function build(): CartLockedMessagePayload
    {
        return new CartLockedMessagePayloadModel(
        );
    }

    public static function of(): CartLockedMessagePayloadBuilder
    {
        return new self();
    }
}
