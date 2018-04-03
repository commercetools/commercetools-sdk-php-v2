<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\TypedMoney;

class ShippingRateModel extends JsonObjectModel implements ShippingRate {
    /**
     * @var TypedMoney
     */
    protected $price;
    /**
     * @var TypedMoney
     */
    protected $freeAbove;
    /**
     * @var mixed
     */
    protected $isMatching;
    /**
     * @var ShippingRatePriceTierCollection
     */
    protected $tiers;

    /**
     * @return TypedMoney
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            $value = $this->raw(ShippingRate::FIELD_PRICE);
            $resolvedClass = $this->resolveDiscriminator(TypedMoney::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->price = $value;
        }
        return $this->price;
    }
    /**
     * @return TypedMoney
     */
    public function getFreeAbove()
    {
        if (is_null($this->freeAbove)) {
            $value = $this->raw(ShippingRate::FIELD_FREE_ABOVE);
            $resolvedClass = $this->resolveDiscriminator(TypedMoney::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->freeAbove = $value;
        }
        return $this->freeAbove;
    }
    /**
     * @return mixed
     */
    public function getIsMatching()
    {
        if (is_null($this->isMatching)) {
            $value = $this->raw(ShippingRate::FIELD_IS_MATCHING);
            $this->isMatching = $value;
        }
        return $this->isMatching;
    }
    /**
     * @return ShippingRatePriceTierCollection
     */
    public function getTiers()
    {
        if (is_null($this->tiers)) {
            $value = $this->raw(ShippingRate::FIELD_TIERS);
            if (is_null($value)) {
                return $this->mapData(ShippingRatePriceTierCollection::class, null);
            }
            $value = $this->mapData(ShippingRatePriceTierCollection::class, $value);
            $this->tiers = $value;
        }
        return $this->tiers;
    }

    /**
     * @param TypedMoney $price
     * @return $this
     */
    public function setPrice(TypedMoney $price)
    {
        $this->price = $price;

        return $this;
    }
    /**
     * @param TypedMoney $freeAbove
     * @return $this
     */
    public function setFreeAbove(TypedMoney $freeAbove)
    {
        $this->freeAbove = $freeAbove;

        return $this;
    }
    /**
     * @param $isMatching
     * @return $this
     */
    public function setIsMatching($isMatching)
    {
        $this->isMatching = $isMatching;

        return $this;
    }
    /**
     * @param ShippingRatePriceTierCollection $tiers
     * @return $this
     */
    public function setTiers(ShippingRatePriceTierCollection $tiers)
    {
        $this->tiers = $tiers;

        return $this;
    }

}
