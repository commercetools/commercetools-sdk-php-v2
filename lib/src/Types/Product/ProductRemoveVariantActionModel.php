<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\ProductUpdateActionModel;

class ProductRemoveVariantActionModel extends ProductUpdateActionModel implements ProductRemoveVariantAction {
    const DISCRIMINATOR_VALUE = 'removeVariant';

    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var mixed
     */
    protected $staged;

    /**
     * @return int
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $value = $this->raw(ProductRemoveVariantAction::FIELD_ID);
            $value = (int)$value;
            $this->id = $value;
        }
        return $this->id;
    }
    /**
     * @return string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            $value = $this->raw(ProductRemoveVariantAction::FIELD_SKU);
            $value = (string)$value;
            $this->sku = $value;
        }
        return $this->sku;
    }
    /**
     * @return mixed
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            $value = $this->raw(ProductRemoveVariantAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id)
    {
        $this->id = (int)$id;

        return $this;
    }
    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku)
    {
        $this->sku = (string)$sku;

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
