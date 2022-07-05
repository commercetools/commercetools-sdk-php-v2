<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Image;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductImageAddedMessage extends Message
{
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_IMAGE = 'image';
    public const FIELD_STAGED = 'staged';

    /**

     * @return null|int
     */
    public function getVariantId();

    /**

     * @return null|Image
     */
    public function getImage();

    /**

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?Image $image
     */
    public function setImage(?Image $image): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
