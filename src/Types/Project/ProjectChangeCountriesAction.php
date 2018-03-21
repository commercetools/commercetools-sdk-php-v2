<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

interface ProjectChangeCountriesAction extends ProjectUpdateAction {
    const FIELD_COUNTRIES = 'countries';

    /**
     * @return CountryCodeCollection
     */
    public function getCountries();

    /**
     * @param CountryCodeCollection $countries
     * @return $this
     */
    public function setCountries(CountryCodeCollection $countries);

}
