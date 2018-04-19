<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\PriceCollection;
use Commercetools\Types\Product\Attribute;
use Commercetools\Types\Common\ImageCollection;
use Commercetools\Types\Product\AttributeCollection;
use Commercetools\Types\Common\Price;
use Commercetools\Types\Common\Image;

interface ProductVariantImportDraft extends JsonObject
{
    const FIELD_ID = 'id';
    const FIELD_SKU = 'sku';
    const FIELD_PRICES = 'prices';
    const FIELD_ATTRIBUTES = 'attributes';
    const FIELD_IMAGES = 'images';

    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getSku();

    /**
     * @return PriceCollection
     */
    public function getPrices();

    /**
     * @return AttributeCollection
     */
    public function getAttributes();

    /**
     * @return ImageCollection
     */
    public function getImages();

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id);

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku);

    /**
     * @param PriceCollection $prices
     * @return $this
     */
    public function setPrices(PriceCollection $prices);

    /**
     * @param AttributeCollection $attributes
     * @return $this
     */
    public function setAttributes(AttributeCollection $attributes);

    /**
     * @param ImageCollection $images
     * @return $this
     */
    public function setImages(ImageCollection $images);

}
