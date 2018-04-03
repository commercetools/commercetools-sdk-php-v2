<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\ProductUpdateActionModel;

use Commercetools\Types\Common\PriceDraft;

class ProductChangePriceActionModel extends ProductUpdateActionModel implements ProductChangePriceAction {
    const DISCRIMINATOR_VALUE = 'changePrice';

    /**
     * @var PriceDraft
     */
    protected $price;
    /**
     * @var string
     */
    protected $priceId;
    /**
     * @var mixed
     */
    protected $staged;

    /**
     * @return PriceDraft
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            $value = $this->raw(ProductChangePriceAction::FIELD_PRICE);
            if (is_null($value)) {
                return $this->mapData(PriceDraft::class, null);
            }
            $value = $this->mapData(PriceDraft::class, $value);

            $this->price = $value;
        }
        return $this->price;
    }
    /**
     * @return string
     */
    public function getPriceId()
    {
        if (is_null($this->priceId)) {
            $value = $this->raw(ProductChangePriceAction::FIELD_PRICE_ID);
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
            $value = $this->raw(ProductChangePriceAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
    }

    /**
     * @param PriceDraft $price
     * @return $this
     */
    public function setPrice(PriceDraft $price)
    {
        $this->price = $price;

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
