<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\TypedMoney;

class TaxedItemPriceModel extends JsonObjectModel implements TaxedItemPrice
{
    /**
     * @var TypedMoney
     */
    protected $totalNet;
    /**
     * @var TypedMoney
     */
    protected $totalGross;

    /**
     * @return TypedMoney
     */
    public function getTotalNet()
    {
        if (is_null($this->totalNet)) {
            $value = $this->raw(TaxedItemPrice::FIELD_TOTAL_NET);
            $resolvedClass = $this->resolveDiscriminator(TypedMoney::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->totalNet = $value;
        }
        return $this->totalNet;
    }
    /**
     * @return TypedMoney
     */
    public function getTotalGross()
    {
        if (is_null($this->totalGross)) {
            $value = $this->raw(TaxedItemPrice::FIELD_TOTAL_GROSS);
            $resolvedClass = $this->resolveDiscriminator(TypedMoney::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->totalGross = $value;
        }
        return $this->totalGross;
    }

    /**
     * @param TypedMoney $totalNet
     * @return $this
     */
    public function setTotalNet(TypedMoney $totalNet)
    {
        $this->totalNet = $totalNet;

        return $this;
    }
    /**
     * @param TypedMoney $totalGross
     * @return $this
     */
    public function setTotalGross(TypedMoney $totalGross)
    {
        $this->totalGross = $totalGross;

        return $this;
    }

}
