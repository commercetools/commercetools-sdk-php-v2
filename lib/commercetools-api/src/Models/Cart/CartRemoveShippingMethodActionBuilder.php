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
 * @implements Builder<CartRemoveShippingMethodAction>
 */
final class CartRemoveShippingMethodActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $shippingKey;

    /**
     * <p>User-defined unique identifier of the Shipping Method to remove from the Cart.</p>
     *

     * @return null|string
     */
    public function getShippingKey()
    {
        return $this->shippingKey;
    }

    /**
     * @param ?string $shippingKey
     * @return $this
     */
    public function withShippingKey(?string $shippingKey)
    {
        $this->shippingKey = $shippingKey;

        return $this;
    }


    public function build(): CartRemoveShippingMethodAction
    {
        return new CartRemoveShippingMethodActionModel(
            $this->shippingKey
        );
    }

    public static function of(): CartRemoveShippingMethodActionBuilder
    {
        return new self();
    }
}
