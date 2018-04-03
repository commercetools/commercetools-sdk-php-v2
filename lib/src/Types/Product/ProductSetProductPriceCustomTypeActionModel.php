<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\ProductUpdateActionModel;

use Commercetools\Types\Type\TypeReference;

class ProductSetProductPriceCustomTypeActionModel extends ProductUpdateActionModel implements ProductSetProductPriceCustomTypeAction {
    const DISCRIMINATOR_VALUE = 'setProductPriceCustomType';

    /**
     * @var string
     */
    protected $fields;
    /**
     * @var string
     */
    protected $priceId;
    /**
     * @var mixed
     */
    protected $staged;
    /**
     * @var TypeReference
     */
    protected $type;

    /**
     * @return string
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            $value = $this->raw(ProductSetProductPriceCustomTypeAction::FIELD_FIELDS);
            $value = (string)$value;
            $this->fields = $value;
        }
        return $this->fields;
    }
    /**
     * @return string
     */
    public function getPriceId()
    {
        if (is_null($this->priceId)) {
            $value = $this->raw(ProductSetProductPriceCustomTypeAction::FIELD_PRICE_ID);
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
            $value = $this->raw(ProductSetProductPriceCustomTypeAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
    }
    /**
     * @return TypeReference
     */
    public function getType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(ProductSetProductPriceCustomTypeAction::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(TypeReference::class, null);
            }
            $value = $this->mapData(TypeReference::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }

    /**
     * @param string $fields
     * @return $this
     */
    public function setFields(string $fields)
    {
        $this->fields = (string)$fields;

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
     * @param TypeReference $type
     * @return $this
     */
    public function setType(TypeReference $type)
    {
        $this->type = $type;

        return $this;
    }

}
