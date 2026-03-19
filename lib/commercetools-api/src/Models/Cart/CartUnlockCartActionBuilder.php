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
 * @implements Builder<CartUnlockCartAction>
 */
final class CartUnlockCartActionBuilder implements Builder
{
    public function build(): CartUnlockCartAction
    {
        return new CartUnlockCartActionModel(
        );
    }

    public static function of(): CartUnlockCartActionBuilder
    {
        return new self();
    }
}
