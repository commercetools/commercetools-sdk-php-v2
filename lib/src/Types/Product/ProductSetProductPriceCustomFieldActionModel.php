<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\ProductUpdateActionModel;

class ProductSetProductPriceCustomFieldActionModel extends ProductUpdateActionModel implements ProductSetProductPriceCustomFieldAction {
    const DISCRIMINATOR_VALUE = 'setProductPriceCustomField';

    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $priceId;
    /**
     * @var mixed
     */
    protected $staged;
    /**
     * @var mixed
     */
    protected $value;

    /**
     * @return string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(ProductSetProductPriceCustomFieldAction::FIELD_NAME);
            $value = (string)$value;
            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return string
     */
    public function getPriceId()
    {
        if (is_null($this->priceId)) {
            $value = $this->raw(ProductSetProductPriceCustomFieldAction::FIELD_PRICE_ID);
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
            $value = $this->raw(ProductSetProductPriceCustomFieldAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
    }
    /**
     * @return mixed
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            $value = $this->raw(ProductSetProductPriceCustomFieldAction::FIELD_VALUE);
            $this->value = $value;
        }
        return $this->value;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = (string)$name;

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
    /**
     * @param $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

}
