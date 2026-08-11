<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Common\Image;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantAddExternalImageAction extends VariantUpdateAction
{
    public const FIELD_IMAGE = 'image';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>Value to add to <code>images</code>.</p>
     *

     * @return null|Image
     */
    public function getImage();

    /**
     * <p>Whether only the staged <code>images</code> is updated. If <code>false</code>, both the current and staged <code>images</code> are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?Image $image
     */
    public function setImage(?Image $image): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
