<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;

interface CategorySlugChangedMessagePayload extends MessagePayload
{
    const FIELD_SLUG = 'slug';

    /**
     * @return null|LocalizedString
     */
    public function getSlug();

    public function setSlug(?LocalizedString $slug): void;
}
