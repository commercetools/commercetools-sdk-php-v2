<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLCountryNotConfiguredInStoreError>
 */
final class GraphQLCountryNotConfiguredInStoreErrorBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $storeCountries;

    /**

     * @var ?string
     */
    private $country;

    /**
     * <p>Countries configured for the Store.</p>
     *

     * @return null|array
     */
    public function getStoreCountries()
    {
        return $this->storeCountries;
    }

    /**
     * <p>The country that is not configured for the Store but referenced on the Cart or Order.</p>
     *

     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param ?array $storeCountries
     * @return $this
     */
    public function withStoreCountries(?array $storeCountries)
    {
        $this->storeCountries = $storeCountries;

        return $this;
    }

    /**
     * @param ?string $country
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }


    public function build(): GraphQLCountryNotConfiguredInStoreError
    {
        return new GraphQLCountryNotConfiguredInStoreErrorModel(
            $this->storeCountries,
            $this->country
        );
    }

    public static function of(): GraphQLCountryNotConfiguredInStoreErrorBuilder
    {
        return new self();
    }
}
