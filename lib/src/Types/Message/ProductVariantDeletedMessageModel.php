<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Product\ProductVariant;

class ProductVariantDeletedMessageModel extends MessageModel implements ProductVariantDeletedMessage
{
    const DISCRIMINATOR_VALUE = 'ProductVariantDeleted';

    /**
     * @var array
     */
    protected $removedImageUrls;
    /**
     * @var ProductVariant
     */
    protected $variant;

    /**
     * @return array
     */
    public function getRemovedImageUrls()
    {
        if (is_null($this->removedImageUrls)) {
            $value = $this->raw(ProductVariantDeletedMessage::FIELD_REMOVED_IMAGE_URLS);
            $this->removedImageUrls = $value;
        }
        return $this->removedImageUrls;
    }
    /**
     * @return ProductVariant
     */
    public function getVariant()
    {
        if (is_null($this->variant)) {
            $value = $this->raw(ProductVariantDeletedMessage::FIELD_VARIANT);
            if (is_null($value)) {
                return $this->mapData(ProductVariant::class, null);
            }
            $value = $this->mapData(ProductVariant::class, $value);

            $this->variant = $value;
        }
        return $this->variant;
    }

    /**
     * @param $removedImageUrls
     * @return $this
     */
    public function setRemovedImageUrls($removedImageUrls)
    {
        $this->removedImageUrls = $removedImageUrls;

        return $this;
    }
    /**
     * @param ProductVariant $variant
     * @return $this
     */
    public function setVariant(ProductVariant $variant)
    {
        $this->variant = $variant;

        return $this;
    }

}
