<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ShippingRateModel extends JsonObjectModel implements ShippingRate
{
    /**

     * @var ?TypedMoney
     */
    protected $price;

    /**

     * @var ?TypedMoney
     */
    protected $freeAbove;

    /**

     * @var ?bool
     */
    protected $isMatching;

    /**

     * @var ?ShippingRatePriceTierCollection
     */
    protected $tiers;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?TypedMoney $price = null,
        ?TypedMoney $freeAbove = null,
        ?bool $isMatching = null,
        ?ShippingRatePriceTierCollection $tiers = null
    ) {
        $this->price = $price;
        $this->freeAbove = $freeAbove;
        $this->isMatching = $isMatching;
        $this->tiers = $tiers;
    }

    /**
     * <p>Currency amount of the ShippingRate.</p>
     *

     * @return null|TypedMoney
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->price = $className::of($data);
        }

        return $this->price;
    }

    /**
     * <p>Shipping is free if the sum of the (Custom) Line Item Prices reaches the specified value.</p>
     *

     * @return null|TypedMoney
     */
    public function getFreeAbove()
    {
        if (is_null($this->freeAbove)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FREE_ABOVE);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->freeAbove = $className::of($data);
        }

        return $this->freeAbove;
    }

    /**
     * <p><code>true</code> if the ShippingRate matches given <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Location">Location</a>.
     * Only appears in response to requests for <a href="#get-shippingmethods-for-a-cart">Get ShippingMethods for a Cart</a> or
     * <a href="#get-shippingmethods-for-a-location">Get ShippingMethods for a Location</a>.</p>
     *

     * @return null|bool
     */
    public function getIsMatching()
    {
        if (is_null($this->isMatching)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_IS_MATCHING);
            if (is_null($data)) {
                return null;
            }
            $this->isMatching = (bool) $data;
        }

        return $this->isMatching;
    }

    /**
     * <p>Price tiers for the ShippingRate.</p>
     *

     * @return null|ShippingRatePriceTierCollection
     */
    public function getTiers()
    {
        if (is_null($this->tiers)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TIERS);
            if (is_null($data)) {
                return null;
            }
            $this->tiers = ShippingRatePriceTierCollection::fromArray($data);
        }

        return $this->tiers;
    }


    /**
     * @param ?TypedMoney $price
     */
    public function setPrice(?TypedMoney $price): void
    {
        $this->price = $price;
    }

    /**
     * @param ?TypedMoney $freeAbove
     */
    public function setFreeAbove(?TypedMoney $freeAbove): void
    {
        $this->freeAbove = $freeAbove;
    }

    /**
     * @param ?bool $isMatching
     */
    public function setIsMatching(?bool $isMatching): void
    {
        $this->isMatching = $isMatching;
    }

    /**
     * @param ?ShippingRatePriceTierCollection $tiers
     */
    public function setTiers(?ShippingRatePriceTierCollection $tiers): void
    {
        $this->tiers = $tiers;
    }
}
