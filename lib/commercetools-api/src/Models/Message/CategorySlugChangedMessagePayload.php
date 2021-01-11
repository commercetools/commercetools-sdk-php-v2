<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CategorySlugChangedMessagePayload extends MessagePayload
{
    public const FIELD_SLUG = 'slug';
    public const FIELD_OLD_SLUG = 'oldSlug';

    /**
     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * @return null|LocalizedString
     */
    public function getOldSlug();

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void;

    /**
     * @param ?LocalizedString $oldSlug
     */
    public function setOldSlug(?LocalizedString $oldSlug): void;
}
