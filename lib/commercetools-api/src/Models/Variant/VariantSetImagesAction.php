<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Common\ImageCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantSetImagesAction extends VariantUpdateAction
{
    public const FIELD_IMAGES = 'images';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>Images to set for the Variant.</p>
     *

     * @return null|ImageCollection
     */
    public function getImages();

    /**
     * <p>If <code>true</code>, only the staged images are updated. If <code>false</code>, both the current and staged images are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?ImageCollection $images
     */
    public function setImages(?ImageCollection $images): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
