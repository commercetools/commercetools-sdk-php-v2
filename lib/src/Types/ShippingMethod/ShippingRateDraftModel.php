<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\Money;

class ShippingRateDraftModel extends JsonObjectModel implements ShippingRateDraft
{
    /**
     * @var Money
     */
    protected $price;
    /**
     * @var Money
     */
    protected $freeAbove;
    /**
     * @var ShippingRatePriceTierCollection
     */
    protected $tiers;

    /**
     * @return Money
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            $value = $this->raw(ShippingRateDraft::FIELD_PRICE);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->price = $value;
        }
        return $this->price;
    }
    /**
     * @return Money
     */
    public function getFreeAbove()
    {
        if (is_null($this->freeAbove)) {
            $value = $this->raw(ShippingRateDraft::FIELD_FREE_ABOVE);
            if (is_null($value)) {
                return $this->mapData(Money::class, null);
            }
            $value = $this->mapData(Money::class, $value);

            $this->freeAbove = $value;
        }
        return $this->freeAbove;
    }
    /**
     * @return ShippingRatePriceTierCollection
     */
    public function getTiers()
    {
        if (is_null($this->tiers)) {
            $value = $this->raw(ShippingRateDraft::FIELD_TIERS);
            if (is_null($value)) {
                return $this->mapData(ShippingRatePriceTierCollection::class, null);
            }
            $value = $this->mapData(ShippingRatePriceTierCollection::class, $value);
            $this->tiers = $value;
        }
        return $this->tiers;
    }

    /**
     * @param Money $price
     * @return $this
     */
    public function setPrice(Money $price)
    {
        $this->price = $price;

        return $this;
    }
    /**
     * @param Money $freeAbove
     * @return $this
     */
    public function setFreeAbove(Money $freeAbove)
    {
        $this->freeAbove = $freeAbove;

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
