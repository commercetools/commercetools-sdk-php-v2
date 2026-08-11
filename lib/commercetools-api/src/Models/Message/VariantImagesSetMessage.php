<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantImagesSetMessage extends Message
{
    public const FIELD_IMAGES = 'images';
    public const FIELD_OLD_IMAGES = 'oldImages';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The images that were set on the Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * <p>The previous images of the Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getOldImages();

    /**
     * <p>Whether the update was only applied to the staged Variant.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;

    /**
     * @param ?ImageCollection $oldImages
     */
    public function setOldImages(?ImageCollection $oldImages): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
