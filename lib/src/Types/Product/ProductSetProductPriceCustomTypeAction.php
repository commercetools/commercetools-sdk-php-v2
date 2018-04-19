<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Type\TypeReference;

interface ProductSetProductPriceCustomTypeAction extends ProductUpdateAction
{
    const FIELD_FIELDS = 'fields';
    const FIELD_PRICE_ID = 'priceId';
    const FIELD_STAGED = 'staged';
    const FIELD_TYPE = 'type';

    /**
     * @return string
     */
    public function getFields();

    /**
     * @return string
     */
    public function getPriceId();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @return TypeReference
     */
    public function getType();

    /**
     * @param string $fields
     * @return $this
     */
    public function setFields(string $fields);

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
     * @param TypeReference $type
     * @return $this
     */
    public function setType(TypeReference $type);

}
