<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ProjectUpdateActionModel;

class ProjectChangeCountriesActionModel extends ProjectUpdateActionModel implements ProjectChangeCountriesAction {
    const DISCRIMINATOR_VALUE = 'changeCountries';

    /**
     * @var array
     */
    protected $countries;

    /**
     * @return array
     */
    public function getCountries()
    {
        if (is_null($this->countries)) {
            $value = $this->raw(ProjectChangeCountriesAction::FIELD_COUNTRIES);
            $value = (array)$value;
            $this->countries = $value;
        }
        return $this->countries;
    }

    /**
     * @param array $countries
     * @return $this
     */
    public function setCountries(array $countries)
    {
        $this->countries = $countries;

        return $this;
    }

}
