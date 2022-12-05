<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\StoreCountry\StoreCountryCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreCountriesChangedMessagePayload>
 */
final class StoreCountriesChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?StoreCountryCollection
     */
    private $addedCountries;

    /**

     * @var ?StoreCountryCollection
     */
    private $removedCountries;

    /**
     * <p><a href="ctp:api:type:StoreCountry">Countries</a> added to the <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|StoreCountryCollection
     */
    public function getAddedCountries()
    {
        return $this->addedCountries;
    }

    /**
     * <p><a href="ctp:api:type:StoreCountry">Countries</a> removed from the <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|StoreCountryCollection
     */
    public function getRemovedCountries()
    {
        return $this->removedCountries;
    }

    /**
     * @param ?StoreCountryCollection $addedCountries
     * @return $this
     */
    public function withAddedCountries(?StoreCountryCollection $addedCountries)
    {
        $this->addedCountries = $addedCountries;

        return $this;
    }

    /**
     * @param ?StoreCountryCollection $removedCountries
     * @return $this
     */
    public function withRemovedCountries(?StoreCountryCollection $removedCountries)
    {
        $this->removedCountries = $removedCountries;

        return $this;
    }


    public function build(): StoreCountriesChangedMessagePayload
    {
        return new StoreCountriesChangedMessagePayloadModel(
            $this->addedCountries,
            $this->removedCountries
        );
    }

    public static function of(): StoreCountriesChangedMessagePayloadBuilder
    {
        return new self();
    }
}
