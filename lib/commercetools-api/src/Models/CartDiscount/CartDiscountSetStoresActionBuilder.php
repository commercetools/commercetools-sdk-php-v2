<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartDiscountSetStoresAction>
 */
final class CartDiscountSetStoresActionBuilder implements Builder
{
    /**

     * @var ?StoreResourceIdentifierCollection
     */
    private $stores;

    /**
     * <p><a href="ctp:api:type:Store">Stores</a> to set.
     * Overrides the current list of Stores.
     * If empty, any existing values will be removed.</p>
     * <p>A failed update can return the following errors:</p>
     * <ul>
     * <li>If the referenced Stores exceed the <a href="/../api/limits#cart-discounts-stores">limit</a>, a <a href="ctp:api:type:MaxStoreReferencesReachedError">MaxStoreReferencesReached</a> error is returned.</li>
     * <li>If the referenced Stores exceed the <a href="/../api/limits#cart-discounts">limit</a> for Cart Discounts that do not require a Discount Code, a <a href="ctp:api:type:StoreCartDiscountsLimitReachedError">StoreCartDiscountsLimitReached</a> error is returned.</li>
     * </ul>
     *

     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * @param ?StoreResourceIdentifierCollection $stores
     * @return $this
     */
    public function withStores(?StoreResourceIdentifierCollection $stores)
    {
        $this->stores = $stores;

        return $this;
    }


    public function build(): CartDiscountSetStoresAction
    {
        return new CartDiscountSetStoresActionModel(
            $this->stores
        );
    }

    public static function of(): CartDiscountSetStoresActionBuilder
    {
        return new self();
    }
}
