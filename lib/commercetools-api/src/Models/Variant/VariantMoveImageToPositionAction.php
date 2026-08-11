<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantMoveImageToPositionAction extends VariantUpdateAction
{
    public const FIELD_IMAGE_URL = 'imageUrl';
    public const FIELD_POSITION = 'position';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The URL of the image to update.</p>
     *

     * @return null|string
     */
    public function getImageUrl();

    /**
     * <p>Position in <code>images</code> where the image should be moved. Must be between <code>0</code> and the total number of images minus <code>1</code>.</p>
     *

     * @return null|int
     */
    public function getPosition();

    /**
     * <p>If <code>true</code>, only the staged <code>images</code> is updated. If <code>false</code>, both the current and staged <code>images</code> is updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?string $imageUrl
     */
    public function setImageUrl(?string $imageUrl): void;

    /**
     * @param ?int $position
     */
    public function setPosition(?int $position): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
