<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ReviewSetLocaleAction extends ReviewUpdateAction
{
    public const FIELD_LOCALE = 'locale';

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getLocale();

    /**
     * @param ?string $locale
     */
    public function setLocale(?string $locale): void;
}
