<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Api\Models\Common\CentPrecisionMoneyModel;
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
     *
     * @var ?CentPrecisionMoney
     */
    protected $price;

    /**
     *
     * @var ?CentPrecisionMoney
     */
    protected $freeAbove;

    /**
     *
     * @var ?bool
     */
    protected $isMatching;

    /**
     *
     * @var ?ShippingRatePriceTierCollection
     */
    protected $tiers;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CentPrecisionMoney $price = null,
        ?CentPrecisionMoney $freeAbove = null,
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
     *
     * @return null|CentPrecisionMoney
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price = CentPrecisionMoneyModel::of($data);
        }

        return $this->price;
    }

    /**
     * <p><a href="/../api/shipping-delivery-overview#free-shipping">Free shipping</a> is applied if the sum of the (Custom) Line Item Prices reaches the specified value.</p>
     *
     *
     * @return null|CentPrecisionMoney
     */
    public function getFreeAbove()
    {
        if (is_null($this->freeAbove)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FREE_ABOVE);
            if (is_null($data)) {
                return null;
            }

            $this->freeAbove = CentPrecisionMoneyModel::of($data);
        }

        return $this->freeAbove;
    }

    /**
     * <p><code>true</code> if the ShippingRate matches given <a href="ctp:api:type:Cart">Cart</a> or <a href="ctp:api:type:Location">Location</a>.
     * Only appears in response to requests for <a href="ctp:api:endpoint:/{projectKey}/shipping-methods/matching-cart:GET">Get ShippingMethods for a Cart</a> or
     * <a href="ctp:api:endpoint:/{projectKey}/shipping-methods/matching-location:GET">Get ShippingMethods for a Location</a>.</p>
     *
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
     * @param ?CentPrecisionMoney $price
     */
    public function setPrice(?CentPrecisionMoney $price): void
    {
        $this->price = $price;
    }

    /**
     * @param ?CentPrecisionMoney $freeAbove
     */
    public function setFreeAbove(?CentPrecisionMoney $freeAbove): void
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
