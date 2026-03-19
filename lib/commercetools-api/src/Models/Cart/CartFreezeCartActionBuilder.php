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
 * @implements Builder<CartFreezeCartAction>
 */
final class CartFreezeCartActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $strategy;

    /**
     * <p>Strategy that determines the freezing behavior.</p>
     *

     * @return null|string
     */
    public function getStrategy()
    {
        return $this->strategy;
    }

    /**
     * @param ?string $strategy
     * @return $this
     */
    public function withStrategy(?string $strategy)
    {
        $this->strategy = $strategy;

        return $this;
    }


    public function build(): CartFreezeCartAction
    {
        return new CartFreezeCartActionModel(
            $this->strategy
        );
    }

    public static function of(): CartFreezeCartActionBuilder
    {
        return new self();
    }
}
