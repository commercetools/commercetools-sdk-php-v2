<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Product\ProductUpdateActionModel;

class ProductMoveImageToPositionActionModel extends ProductUpdateActionModel implements ProductMoveImageToPositionAction
{
    const DISCRIMINATOR_VALUE = 'moveImageToPosition';

    /**
     * @var string
     */
    protected $imageUrl;
    /**
     * @var int
     */
    protected $position;
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var int
     */
    protected $variantId;
    /**
     * @var mixed
     */
    protected $staged;

    /**
     * @return string
     */
    public function getImageUrl()
    {
        if (is_null($this->imageUrl)) {
            $value = $this->raw(ProductMoveImageToPositionAction::FIELD_IMAGE_URL);
            $value = (string)$value;
            $this->imageUrl = $value;
        }
        return $this->imageUrl;
    }
    /**
     * @return int
     */
    public function getPosition()
    {
        if (is_null($this->position)) {
            $value = $this->raw(ProductMoveImageToPositionAction::FIELD_POSITION);
            $value = (int)$value;
            $this->position = $value;
        }
        return $this->position;
    }
    /**
     * @return string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            $value = $this->raw(ProductMoveImageToPositionAction::FIELD_SKU);
            $value = (string)$value;
            $this->sku = $value;
        }
        return $this->sku;
    }
    /**
     * @return int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            $value = $this->raw(ProductMoveImageToPositionAction::FIELD_VARIANT_ID);
            $value = (int)$value;
            $this->variantId = $value;
        }
        return $this->variantId;
    }
    /**
     * @return mixed
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            $value = $this->raw(ProductMoveImageToPositionAction::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
    }

    /**
     * @param string $imageUrl
     * @return $this
     */
    public function setImageUrl(string $imageUrl)
    {
        $this->imageUrl = (string)$imageUrl;

        return $this;
    }
    /**
     * @param int $position
     * @return $this
     */
    public function setPosition(int $position)
    {
        $this->position = (int)$position;

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
     * @param int $variantId
     * @return $this
     */
    public function setVariantId(int $variantId)
    {
        $this->variantId = (int)$variantId;

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
