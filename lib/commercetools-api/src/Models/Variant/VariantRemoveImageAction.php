<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantRemoveImageAction extends VariantUpdateAction
{
    public const FIELD_IMAGE_URL = 'imageUrl';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The URL of the image to remove.</p>
     *

     * @return null|string
     */
    public function getImageUrl();

    /**
     * <p>If <code>true</code>, only the staged image is removed. If <code>false</code>, both the current and staged image is removed.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?string $imageUrl
     */
    public function setImageUrl(?string $imageUrl): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}
