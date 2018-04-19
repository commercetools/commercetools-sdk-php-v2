<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\ProductUpdateActionModel;

class ProductRemovePriceActionModel extends ProductUpdateActionModel implements ProductRemovePriceAction
{
    const DISCRIMINATOR_VALUE = 'removePrice';

    /**
     * @var string
     */
    protected $priceId;
    /**
     * @var mixed
     */
    protected $staged;

    /**
     * @return string
     */
    public function getPriceId()
    {
        if (is_null($this->priceId)) {
            $value = $this->raw(ProductRemovePriceAction::FIELD_PRICE_ID);
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
            $value = $this->raw(ProductRemovePriceAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
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
