<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

interface ProductRevertedStagedChangesMessage extends Message
{
    const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';

    /**
     * @return null|array
     */
    public function getRemovedImageUrls();

    public function setRemovedImageUrls(?array $removedImageUrls): void;
}
