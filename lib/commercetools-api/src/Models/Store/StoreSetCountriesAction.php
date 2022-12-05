<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\StoreCountry\StoreCountryCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreSetCountriesAction extends StoreUpdateAction
{
    public const FIELD_COUNTRIES = 'countries';

    /**
     * <p>New value to set.</p>
     *

     * @return null|StoreCountryCollection
     */
    public function getCountries();

    /**
     * @param ?StoreCountryCollection $countries
     */
    public function setCountries(?StoreCountryCollection $countries): void;
}
