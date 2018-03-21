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
     * @var CountryCodeCollection
     */
    protected $countries;

    /**
     * @return CountryCodeCollection
     */
    public function getCountries()
    {
        if (is_null($this->countries)) {
            $value = $this->raw(ProjectChangeCountriesAction::FIELD_COUNTRIES);
            if (is_null($value)) {
                return $this->mapData(CountryCodeCollection::class, null);
            }
            $value = $this->mapData(CountryCodeCollection::class, $value);
            $this->countries = $value;
        }
        return $this->countries;
    }

    /**
     * @param CountryCodeCollection $countries
     * @return $this
     */
    public function setCountries(CountryCodeCollection $countries)
    {
        $this->countries = $countries;

        return $this;
    }

}
