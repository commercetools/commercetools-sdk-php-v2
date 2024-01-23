<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountStoreRemovedMessagePayload>
 */
final class CartDiscountStoreRemovedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|StoreKeyReference|StoreKeyReferenceBuilder
     */
    private $store;

    /**
     * <p>The <a href="ctp:api:type:Store">Store</a> that was removed from the <a href="ctp:api:type:CartDiscount">Cart Discount</a>.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore()
    {
        return $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store;
    }

    /**
     * @param ?StoreKeyReference $store
     * @return $this
     */
    public function withStore(?StoreKeyReference $store)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @deprecated use withStore() instead
     * @return $this
     */
    public function withStoreBuilder(?StoreKeyReferenceBuilder $store)
    {
        $this->store = $store;

        return $this;
    }

    public function build(): CartDiscountStoreRemovedMessagePayload
    {
        return new CartDiscountStoreRemovedMessagePayloadModel(
            $this->store instanceof StoreKeyReferenceBuilder ? $this->store->build() : $this->store
        );
    }

    public static function of(): CartDiscountStoreRemovedMessagePayloadBuilder
    {
        return new self();
    }
}
