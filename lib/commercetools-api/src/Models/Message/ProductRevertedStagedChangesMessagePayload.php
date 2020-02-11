<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductRevertedStagedChangesMessagePayload extends MessagePayload
{

    public const FIELD_REMOVED_IMAGE_URLS = 'removedImageUrls';

    /**
     * @return null|array
     */
    public function getRemovedImageUrls();

    public function setRemovedImageUrls(?array $removedImageUrls): void;
}
