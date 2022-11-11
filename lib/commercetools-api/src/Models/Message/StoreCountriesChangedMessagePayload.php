<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\StoreCountry\StoreCountryCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StoreCountriesChangedMessagePayload extends MessagePayload
{
    public const FIELD_ADDED_COUNTRIES = 'addedCountries';
    public const FIELD_REMOVED_COUNTRIES = 'removedCountries';

    /**
     * <p><a href="ctp:api:type:StoreCountry">Countries</a> added to the <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|StoreCountryCollection
     */
    public function getAddedCountries();

    /**
     * <p><a href="ctp:api:type:StoreCountry">Countries</a> removed from the <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|StoreCountryCollection
     */
    public function getRemovedCountries();

    /**
     * @param ?StoreCountryCollection $addedCountries
     */
    public function setAddedCountries(?StoreCountryCollection $addedCountries): void;

    /**
     * @param ?StoreCountryCollection $removedCountries
     */
    public function setRemovedCountries(?StoreCountryCollection $removedCountries): void;
}
