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
 * @implements Builder<CartUnlockedMessagePayload>
 */
final class CartUnlockedMessagePayloadBuilder implements Builder
{
    public function build(): CartUnlockedMessagePayload
    {
        return new CartUnlockedMessagePayloadModel(
        );
    }

    public static function of(): CartUnlockedMessagePayloadBuilder
    {
        return new self();
    }
}
