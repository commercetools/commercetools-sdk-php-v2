<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\StoreCountry\StoreCountry;
use Commercetools\Api\Models\StoreCountry\StoreCountryBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreRemoveCountryAction>
 */
final class StoreRemoveCountryActionBuilder implements Builder
{
    /**

     * @var null|StoreCountry|StoreCountryBuilder
     */
    private $country;

    /**
     * <p>Value to remove from <code>countries</code>.</p>
     *

     * @return null|StoreCountry
     */
    public function getCountry()
    {
        return $this->country instanceof StoreCountryBuilder ? $this->country->build() : $this->country;
    }

    /**
     * @param ?StoreCountry $country
     * @return $this
     */
    public function withCountry(?StoreCountry $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @deprecated use withCountry() instead
     * @return $this
     */
    public function withCountryBuilder(?StoreCountryBuilder $country)
    {
        $this->country = $country;

        return $this;
    }

    public function build(): StoreRemoveCountryAction
    {
        return new StoreRemoveCountryActionModel(
            $this->country instanceof StoreCountryBuilder ? $this->country->build() : $this->country
        );
    }

    public static function of(): StoreRemoveCountryActionBuilder
    {
        return new self();
    }
}
