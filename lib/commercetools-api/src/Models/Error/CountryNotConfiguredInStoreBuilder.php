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
 * @implements Builder<CountryNotConfiguredInStore>
 */
final class CountryNotConfiguredInStoreBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var ?array
     */
    private $storeCountries;

    /**

     * @var ?string
     */
    private $country;

    /**
     * <p><code>&quot;The country $country is not configured for the store $store.&quot;</code></p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

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
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
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


    public function build(): CountryNotConfiguredInStore
    {
        return new CountryNotConfiguredInStoreModel(
            $this->message,
            $this->storeCountries,
            $this->country
        );
    }

    public static function of(): CountryNotConfiguredInStoreBuilder
    {
        return new self();
    }
}
