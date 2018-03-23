<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ProjectUpdateActionModel;

class ProjectChangeLanguagesActionModel extends ProjectUpdateActionModel implements ProjectChangeLanguagesAction {
    const DISCRIMINATOR_VALUE = 'changeLanguages';

    /**
     * @var LocaleCollection
     */
    protected $languages;

    /**
     * @return LocaleCollection
     */
    public function getLanguages()
    {
        if (is_null($this->languages)) {
            $value = $this->raw(ProjectChangeLanguagesAction::FIELD_LANGUAGES);
            if (is_null($value)) {
                return $this->mapData(LocaleCollection::class, null);
            }
            $value = $this->mapData(LocaleCollection::class, $value);
            $this->languages = $value;
        }
        return $this->languages;
    }

    /**
     * @param LocaleCollection $languages
     * @return $this
     */
    public function setLanguages(LocaleCollection $languages)
    {
        $this->languages = $languages;

        return $this;
    }

}
