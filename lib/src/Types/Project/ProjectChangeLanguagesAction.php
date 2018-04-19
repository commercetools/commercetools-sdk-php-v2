<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

interface ProjectChangeLanguagesAction extends ProjectUpdateAction
{
    const FIELD_LANGUAGES = 'languages';

    /**
     * @return array
     */
    public function getLanguages();

    /**
     * @param array $languages
     * @return $this
     */
    public function setLanguages(array $languages);

}
