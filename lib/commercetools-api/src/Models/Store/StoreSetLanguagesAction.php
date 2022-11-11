<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreSetLanguagesAction extends StoreUpdateAction
{
    public const FIELD_LANGUAGES = 'languages';

    /**
     * <p>Value to set.</p>
     *

     * @return null|array
     */
    public function getLanguages();

    /**
     * @param ?array $languages
     */
    public function setLanguages(?array $languages): void;
}
