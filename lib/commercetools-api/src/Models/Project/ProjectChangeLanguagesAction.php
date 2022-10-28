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
     * <p>New value to set. Must not be empty.</p>
     *

     * @return null|array
     */
    public function getLanguages();

    /**
     * @param ?array $languages
     */
    public function setLanguages(?array $languages): void;
}
