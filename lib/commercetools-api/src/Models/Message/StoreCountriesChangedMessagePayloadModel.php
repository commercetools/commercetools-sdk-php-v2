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
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StoreCountriesChangedMessagePayloadModel extends JsonObjectModel implements StoreCountriesChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'StoreCountriesChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?StoreCountryCollection
     */
    protected $addedCountries;

    /**
     *
     * @var ?StoreCountryCollection
     */
    protected $removedCountries;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StoreCountryCollection $addedCountries = null,
        ?StoreCountryCollection $removedCountries = null,
        ?string $type = null
    ) {
        $this->addedCountries = $addedCountries;
        $this->removedCountries = $removedCountries;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><a href="ctp:api:type:StoreCountry">Countries</a> added to the <a href="ctp:api:type:Store">Store</a>.</p>
     *
     *
     * @return null|StoreCountryCollection
     */
    public function getAddedCountries()
    {
        if (is_null($this->addedCountries)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ADDED_COUNTRIES);
            if (is_null($data)) {
                return null;
            }
            $this->addedCountries = StoreCountryCollection::fromArray($data);
        }

        return $this->addedCountries;
    }

    /**
     * <p><a href="ctp:api:type:StoreCountry">Countries</a> removed from the <a href="ctp:api:type:Store">Store</a>.</p>
     *
     *
     * @return null|StoreCountryCollection
     */
    public function getRemovedCountries()
    {
        if (is_null($this->removedCountries)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_REMOVED_COUNTRIES);
            if (is_null($data)) {
                return null;
            }
            $this->removedCountries = StoreCountryCollection::fromArray($data);
        }

        return $this->removedCountries;
    }


    /**
     * @param ?StoreCountryCollection $addedCountries
     */
    public function setAddedCountries(?StoreCountryCollection $addedCountries): void
    {
        $this->addedCountries = $addedCountries;
    }

    /**
     * @param ?StoreCountryCollection $removedCountries
     */
    public function setRemovedCountries(?StoreCountryCollection $removedCountries): void
    {
        $this->removedCountries = $removedCountries;
    }
}
