<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CartRemoveShippingMethodAction extends CartUpdateAction
{
    public const FIELD_SHIPPING_KEY = 'shippingKey';

    /**
     * <p>User-defined unique identifier of the Shipping Method to remove from the Cart.</p>
     *

     * @return null|string
     */
    public function getShippingKey();

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void;
}
