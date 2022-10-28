<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductRevertedStagedChangesMessage extends Message
{
    public const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';

    /**
     * <p>List of image URLs that were removed during the <a href="ctp:api:type:ProductRevertStagedChangesAction">Revert Staged Changes</a> update action.</p>
     *

     * @return null|array
     */
    public function getRemovedImageUrls();

    /**
     * @param ?array $removedImageUrls
     */
    public function setRemovedImageUrls(?array $removedImageUrls): void;
}
