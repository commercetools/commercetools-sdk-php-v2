<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Project\ProjectUpdateActionModel;

class ProjectChangeLanguagesActionModel extends ProjectUpdateActionModel implements ProjectChangeLanguagesAction
{
    const DISCRIMINATOR_VALUE = 'changeLanguages';

    /**
     * @var array
     */
    protected $languages;

    /**
     * @return array
     */
    public function getLanguages()
    {
        if (is_null($this->languages)) {
            $value = $this->raw(ProjectChangeLanguagesAction::FIELD_LANGUAGES);
            $value = (array)$value;
            $this->languages = $value;
        }
        return $this->languages;
    }

    /**
     * @param array $languages
     * @return $this
     */
    public function setLanguages(array $languages)
    {
        $this->languages = $languages;

        return $this;
    }

}
