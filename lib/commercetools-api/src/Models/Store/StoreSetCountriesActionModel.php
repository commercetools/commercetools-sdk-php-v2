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
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StoreSetCountriesActionModel extends JsonObjectModel implements StoreSetCountriesAction
{
    public const DISCRIMINATOR_VALUE = 'setCountries';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?StoreCountryCollection
     */
    protected $countries;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StoreCountryCollection $countries = null,
        ?string $action = null
    ) {
        $this->countries = $countries;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>New value to set.</p>
     *
     *
     * @return null|StoreCountryCollection
     */
    public function getCountries()
    {
        if (is_null($this->countries)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_COUNTRIES);
            if (is_null($data)) {
                return null;
            }
            $this->countries = StoreCountryCollection::fromArray($data);
        }

        return $this->countries;
    }


    /**
     * @param ?StoreCountryCollection $countries
     */
    public function setCountries(?StoreCountryCollection $countries): void
    {
        $this->countries = $countries;
    }
}
