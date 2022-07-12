<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductRevertedStagedChangesMessagePayload extends MessagePayload
{
    public const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';

    /**

     * @return null|array
     */
    public function getRemovedImageUrls();

    /**
     * @param ?array $removedImageUrls
     */
    public function setRemovedImageUrls(?array $removedImageUrls): void;
}
