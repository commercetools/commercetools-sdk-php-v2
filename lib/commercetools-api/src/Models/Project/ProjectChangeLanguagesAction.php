<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectChangeLanguagesAction extends ProjectUpdateAction
{
    public const FIELD_LANGUAGES = 'languages';

    /**
     * <p>New value to set.</p>
     * <p>If set to an empty value, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     * <p>If a language in use by a <a href="ctp:api:type:Store">Store</a> is removed, a <a href="ctp:api:type:LanguageUsedInStoresError">LanguageUsedInStores</a> error is returned.</p>
     *

     * @return null|array
     */
    public function getLanguages();

    /**
     * @param ?array $languages
     */
    public function setLanguages(?array $languages): void;
}
