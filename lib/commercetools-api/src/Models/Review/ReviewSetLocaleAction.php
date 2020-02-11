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
     * <p>If <code>locale</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *
     * @return null|string
     */
    public function getLocale();

    public function setLocale(?string $locale): void;
}
