<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Common\Image;

class ProductImageAddedMessageModel extends MessageModel implements ProductImageAddedMessage {
    const DISCRIMINATOR_VALUE = 'ProductImageAdded';

    /**
     * @var int
     */
    protected $variantId;
    /**
     * @var Image
     */
    protected $image;
    /**
     * @var mixed
     */
    protected $staged;

    /**
     * @return int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            $value = $this->raw(ProductImageAddedMessage::FIELD_VARIANT_ID);
            $value = (int)$value;
            $this->variantId = $value;
        }
        return $this->variantId;
    }
    /**
     * @return Image
     */
    public function getImage()
    {
        if (is_null($this->image)) {
            $value = $this->raw(ProductImageAddedMessage::FIELD_IMAGE);
            if (is_null($value)) {
                return $this->mapData(Image::class, null);
            }
            $value = $this->mapData(Image::class, $value);

            $this->image = $value;
        }
        return $this->image;
    }
    /**
     * @return mixed
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            $value = $this->raw(ProductImageAddedMessage::FIELD_STAGED);
            $this->staged = $value;
        }
        return $this->staged;
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
     * @param Image $image
     * @return $this
     */
    public function setImage(Image $image)
    {
        $this->image = $image;

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
