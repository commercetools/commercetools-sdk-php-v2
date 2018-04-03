<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\ProductUpdateActionModel;

use Commercetools\Types\Common\DiscountedPrice;

class ProductSetDiscountedPriceActionModel extends ProductUpdateActionModel implements ProductSetDiscountedPriceAction {
    const DISCRIMINATOR_VALUE = 'setDiscountedPrice';

    /**
     * @var DiscountedPrice
     */
    protected $discounted;
    /**
     * @var string
     */
    protected $priceId;
    /**
     * @var mixed
     */
    protected $staged;

    /**
     * @return DiscountedPrice
     */
    public function getDiscounted()
    {
        if (is_null($this->discounted)) {
            $value = $this->raw(ProductSetDiscountedPriceAction::FIELD_DISCOUNTED);
            if (is_null($value)) {
                return $this->mapData(DiscountedPrice::class, null);
            }
            $value = $this->mapData(DiscountedPrice::class, $value);

            $this->discounted = $value;
        }
        return $this->discounted;
    }
    /**
     * @return string
     */
    public function getPriceId()
    {
        if (is_null($this->priceId)) {
            $value = $this->raw(ProductSetDiscountedPriceAction::FIELD_PRICE_ID);
            $value = (string)$value;
            $this->priceId = $value;
        }
        return $this->priceId;
    }
    /**
     * @return mixed
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            $value = $this->raw(ProductSetDiscountedPriceAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
    }

    /**
     * @param DiscountedPrice $discounted
     * @return $this
     */
    public function setDiscounted(DiscountedPrice $discounted)
    {
        $this->discounted = $discounted;

        return $this;
    }
    /**
     * @param string $priceId
     * @return $this
     */
    public function setPriceId(string $priceId)
    {
        $this->priceId = (string)$priceId;

        return $this;
    }
    /**
     * @param $staged
     * @return $this
     */
    public function setStaged($staged)
    {
        $this->staged = $staged;

        return $this;
    }

}
