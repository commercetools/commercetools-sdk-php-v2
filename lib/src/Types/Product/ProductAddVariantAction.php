<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Common\PriceDraftCollection;
use Commercetools\Types\Common\ImageCollection;
use Commercetools\Types\Common\PriceDraft;
use Commercetools\Types\Common\Image;

interface ProductAddVariantAction extends ProductUpdateAction
{
    const FIELD_ATTRIBUTES = 'attributes';
    const FIELD_IMAGES = 'images';
    const FIELD_KEY = 'key';
    const FIELD_PRICES = 'prices';
    const FIELD_SKU = 'sku';
    const FIELD_STAGED = 'staged';

    /**
     * @return AttributeCollection
     */
    public function getAttributes();

    /**
     * @return ImageCollection
     */
    public function getImages();

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return PriceDraftCollection
     */
    public function getPrices();

    /**
     * @return string
     */
    public function getSku();

    /**
     * @return mixed
     */
    public function getStaged();

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

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param PriceDraftCollection $prices
     * @return $this
     */
    public function setPrices(PriceDraftCollection $prices);

    /**
     * @param string $sku
     * @return $this
     */
    public function setSku(string $sku);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

}
