<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartDiscountSetStoresActionModel extends JsonObjectModel implements CartDiscountSetStoresAction
{
    public const DISCRIMINATOR_VALUE = 'setStores';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?StoreResourceIdentifierCollection
     */
    protected $stores;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StoreResourceIdentifierCollection $stores = null,
        ?string $action = null
    ) {
        $this->stores = $stores;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

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
     *
     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores()
    {
        if (is_null($this->stores)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_STORES);
            if (is_null($data)) {
                return null;
            }
            $this->stores = StoreResourceIdentifierCollection::fromArray($data);
        }

        return $this->stores;
    }


    /**
     * @param ?StoreResourceIdentifierCollection $stores
     */
    public function setStores(?StoreResourceIdentifierCollection $stores): void
    {
        $this->stores = $stores;
    }
}
