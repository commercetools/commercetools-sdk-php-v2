<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Common\Image;

interface ProductImageAddedMessage extends Message
{
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_IMAGE = 'image';
    const FIELD_STAGED = 'staged';

    /**
     * @return int
     */
    public function getVariantId();

    /**
     * @return Image
     */
    public function getImage();

    /**
     * @return mixed
     */
    public function getStaged();

    /**
     * @param int $variantId
     * @return $this
     */
    public function setVariantId(int $variantId);

    /**
     * @param Image $image
     * @return $this
     */
    public function setImage(Image $image);

    /**
     * @param mixed $staged
     * @return $this
     */
    public function setStaged($staged);

}
