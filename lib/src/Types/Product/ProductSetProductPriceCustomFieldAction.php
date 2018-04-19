<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

interface ProductSetProductPriceCustomFieldAction extends ProductUpdateAction
{
    const FIELD_NAME = 'name';
    const FIELD_PRICE_ID = 'priceId';
    const FIELD_STAGED = 'staged';
    const FIELD_VALUE = 'value';

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getPriceId();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param string $priceId
     * @return $this
     */
    public function setPriceId(string $priceId);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

    /**
     * @param mixed $value
     * @return $this
     */
    public function setValue($value);

}
