<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface GraphQLCountryNotConfiguredInStoreError extends GraphQLErrorObject
{
    public const FIELD_STORE_COUNTRIES = 'storeCountries';
    public const FIELD_COUNTRY = 'country';

    /**

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Countries configured for the Store.</p>
     *

     * @return null|array
     */
    public function getStoreCountries();

    /**
     * <p>The country that is not configured for the Store but referenced on the Cart or Order.</p>
     *

     * @return null|string
     */
    public function getCountry();

    /**
     * @param ?array $storeCountries
     */
    public function setStoreCountries(?array $storeCountries): void;

    /**
     * @param ?string $country
     */
    public function setCountry(?string $country): void;
}
