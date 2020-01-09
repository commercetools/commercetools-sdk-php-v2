<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

interface ProjectChangeCountriesAction extends ProjectUpdateAction
{
    const FIELD_COUNTRIES = 'countries';

    /**
     * <p>A two-digit country code as per country code.</p>
     *
     * @return null|array
     */
    public function getCountries();

    public function setCountries(?array $countries): void;
}
