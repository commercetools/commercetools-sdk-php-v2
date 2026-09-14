<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Image;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantImageAddedMessage extends Message
{
    public const FIELD_PRODUCT = 'product';
    public const FIELD_IMAGE = 'image';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>Reference to the Product containing the Variant.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p><a href="ctp:api:type:Image">Image</a> that was added.</p>
     *

     * @return null|Image
     */
    public function getImage();

    /**
     * <p>Whether the update was only applied to the staged Variant.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?Image $image
     */
    public function setImage(?Image $image): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
