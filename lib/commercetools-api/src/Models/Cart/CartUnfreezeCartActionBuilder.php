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
 * @implements Builder<CartUnfreezeCartAction>
 */
final class CartUnfreezeCartActionBuilder implements Builder
{
    public function build(): CartUnfreezeCartAction
    {
        return new CartUnfreezeCartActionModel(
        );
    }

    public static function of(): CartUnfreezeCartActionBuilder
    {
        return new self();
    }
}
