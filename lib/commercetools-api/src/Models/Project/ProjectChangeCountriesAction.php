<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;

interface ProjectChangeCountriesAction extends ProjectUpdateAction
{
    
    const FIELD_COUNTRIES = 'countries';

    /**
     *
     * @return array|null
     */
    public function getCountries();
    public function setCountries(?array $countries): void;
}