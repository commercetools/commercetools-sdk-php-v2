<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Image;

interface ProductImageAddedMessagePayload extends MessagePayload
{
    
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_IMAGE = 'image';
    const FIELD_STAGED = 'staged';

    /**
     *
     * @return int|null
     */
    public function getVariantId();
    
    /**
     *
     * @return Image|null
     */
    public function getImage();
    
    /**
     *
     * @return bool|null
     */
    public function getStaged();
    public function setVariantId(?int $variantId): void;
    
    public function setImage(?Image $image): void;
    
    public function setStaged(?bool $staged): void;
}