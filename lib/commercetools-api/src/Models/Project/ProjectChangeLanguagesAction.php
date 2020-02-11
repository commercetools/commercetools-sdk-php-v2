<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProjectChangeLanguagesAction extends ProjectUpdateAction
{

    public const FIELD_LANGUAGES = 'languages';

    /**
     * <p>.</p>
     *
     * @return null|array
     */
    public function getLanguages();

    public function setLanguages(?array $languages): void;
}
