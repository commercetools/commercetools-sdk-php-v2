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
 * @implements Builder<StoreAddCountryAction>
 */
final class StoreAddCountryActionBuilder implements Builder
{
    /**

     * @var null|StoreCountry|StoreCountryBuilder
     */
    private $country;

    /**
     * <p>Value to append to <code>countries</code>.</p>
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

    public function build(): StoreAddCountryAction
    {
        return new StoreAddCountryActionModel(
            $this->country instanceof StoreCountryBuilder ? $this->country->build() : $this->country
        );
    }

    public static function of(): StoreAddCountryActionBuilder
    {
        return new self();
    }
}
