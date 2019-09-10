<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

interface ProjectChangeLanguagesAction extends ProjectUpdateAction
{
    const FIELD_LANGUAGES = 'languages';

    /**
     * @return null|array
     */
    public function getLanguages();

    public function setLanguages(?array $languages): void;
}
