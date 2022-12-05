<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\StoreCountry\StoreCountryCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreSetCountriesAction>
 */
final class StoreSetCountriesActionBuilder implements Builder
{
    /**

     * @var ?StoreCountryCollection
     */
    private $countries;

    /**
     * <p>New value to set.</p>
     *

     * @return null|StoreCountryCollection
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @param ?StoreCountryCollection $countries
     * @return $this
     */
    public function withCountries(?StoreCountryCollection $countries)
    {
        $this->countries = $countries;

        return $this;
    }


    public function build(): StoreSetCountriesAction
    {
        return new StoreSetCountriesActionModel(
            $this->countries
        );
    }

    public static function of(): StoreSetCountriesActionBuilder
    {
        return new self();
    }
}
