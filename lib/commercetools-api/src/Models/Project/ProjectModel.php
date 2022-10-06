<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Message\MessagesConfiguration;
use Commercetools\Api\Models\Message\MessagesConfigurationModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class ProjectModel extends JsonObjectModel implements Project
{
    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?array
     */
    protected $countries;

    /**
     *
     * @var ?array
     */
    protected $currencies;

    /**
     *
     * @var ?array
     */
    protected $languages;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     *
     * @var ?string
     */
    protected $trialUntil;

    /**
     *
     * @var ?MessagesConfiguration
     */
    protected $messages;

    /**
     *
     * @var ?CartsConfiguration
     */
    protected $carts;

    /**
     *
     * @var ?ShoppingListsConfiguration
     */
    protected $shoppingLists;

    /**
     *
     * @var ?ShippingRateInputType
     */
    protected $shippingRateInputType;

    /**
     *
     * @var ?ExternalOAuth
     */
    protected $externalOAuth;

    /**
     *
     * @var ?SearchIndexingConfiguration
     */
    protected $searchIndexing;

    /**
     *
     * @var ?BusinessUnitConfiguration
     */
    protected $businessUnits;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $version = null,
        ?string $key = null,
        ?string $name = null,
        ?array $countries = null,
        ?array $currencies = null,
        ?array $languages = null,
        ?DateTimeImmutable $createdAt = null,
        ?string $trialUntil = null,
        ?MessagesConfiguration $messages = null,
        ?CartsConfiguration $carts = null,
        ?ShoppingListsConfiguration $shoppingLists = null,
        ?ShippingRateInputType $shippingRateInputType = null,
        ?ExternalOAuth $externalOAuth = null,
        ?SearchIndexingConfiguration $searchIndexing = null,
        ?BusinessUnitConfiguration $businessUnits = null
    ) {
        $this->version = $version;
        $this->key = $key;
        $this->name = $name;
        $this->countries = $countries;
        $this->currencies = $currencies;
        $this->languages = $languages;
        $this->createdAt = $createdAt;
        $this->trialUntil = $trialUntil;
        $this->messages = $messages;
        $this->carts = $carts;
        $this->shoppingLists = $shoppingLists;
        $this->shippingRateInputType = $shippingRateInputType;
        $this->externalOAuth = $externalOAuth;
        $this->searchIndexing = $searchIndexing;
        $this->businessUnits = $businessUnits;
    }

    /**
     * <p>Current version of the Project.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>User-defined unique identifier of the Project.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Name of the Project.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Country code of the geographic location.</p>
     *
     *
     * @return null|array
     */
    public function getCountries()
    {
        if (is_null($this->countries)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_COUNTRIES);
            if (is_null($data)) {
                return null;
            }
            $this->countries = $data;
        }

        return $this->countries;
    }

    /**
     * <p>Currency code of the country. A Project must have at least one currency.</p>
     *
     *
     * @return null|array
     */
    public function getCurrencies()
    {
        if (is_null($this->currencies)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_CURRENCIES);
            if (is_null($data)) {
                return null;
            }
            $this->currencies = $data;
        }

        return $this->currencies;
    }

    /**
     * <p>Language of the country. A Project must have at least one language.</p>
     *
     *
     * @return null|array
     */
    public function getLanguages()
    {
        if (is_null($this->languages)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_LANGUAGES);
            if (is_null($data)) {
                return null;
            }
            $this->languages = $data;
        }

        return $this->languages;
    }

    /**
     * <p>Date and time (UTC) the Project was initially created.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * <p>Date in YYYY-MM format specifying when the trial period for the Project ends. Only present on Projects in trial period.</p>
     *
     *
     * @return null|string
     */
    public function getTrialUntil()
    {
        if (is_null($this->trialUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TRIAL_UNTIL);
            if (is_null($data)) {
                return null;
            }
            $this->trialUntil = (string) $data;
        }

        return $this->trialUntil;
    }

    /**
     * <p>Holds the configuration for the <a href="/../api/projects/messages">Messages Query</a> feature.</p>
     *
     *
     * @return null|MessagesConfiguration
     */
    public function getMessages()
    {
        if (is_null($this->messages)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_MESSAGES);
            if (is_null($data)) {
                return null;
            }

            $this->messages = MessagesConfigurationModel::of($data);
        }

        return $this->messages;
    }

    /**
     * <p>Holds the configuration for the <a href="/../api/projects/carts">Carts</a> feature.</p>
     *
     *
     * @return null|CartsConfiguration
     */
    public function getCarts()
    {
        if (is_null($this->carts)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CARTS);
            if (is_null($data)) {
                return null;
            }

            $this->carts = CartsConfigurationModel::of($data);
        }

        return $this->carts;
    }

    /**
     * <p>Holds the configuration for the <a href="/../api/projects/shoppingLists">Shopping Lists</a> feature. This field may not be present on Projects created before January 2020.</p>
     *
     *
     * @return null|ShoppingListsConfiguration
     */
    public function getShoppingLists()
    {
        if (is_null($this->shoppingLists)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHOPPING_LISTS);
            if (is_null($data)) {
                return null;
            }

            $this->shoppingLists = ShoppingListsConfigurationModel::of($data);
        }

        return $this->shoppingLists;
    }

    /**
     * <p>Holds the configuration for the <a href="ctp:api:type:ShippingRatePriceTier">tiered shipping rates</a> feature.</p>
     *
     *
     * @return null|ShippingRateInputType
     */
    public function getShippingRateInputType()
    {
        if (is_null($this->shippingRateInputType)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_RATE_INPUT_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->shippingRateInputType = ShippingRateInputTypeModel::of($data);
        }

        return $this->shippingRateInputType;
    }

    /**
     * <p>Represents a RFC 7662 compliant <a href="https://datatracker.ietf.org/doc/html/rfc7662">OAuth 2.0 Token Introspection</a> endpoint.</p>
     *
     *
     * @return null|ExternalOAuth
     */
    public function getExternalOAuth()
    {
        if (is_null($this->externalOAuth)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXTERNAL_O_AUTH);
            if (is_null($data)) {
                return null;
            }

            $this->externalOAuth = ExternalOAuthModel::of($data);
        }

        return $this->externalOAuth;
    }

    /**
     * <p>Controls indexing of resources to be provided on high performance read-only search endpoints.</p>
     *
     *
     * @return null|SearchIndexingConfiguration
     */
    public function getSearchIndexing()
    {
        if (is_null($this->searchIndexing)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SEARCH_INDEXING);
            if (is_null($data)) {
                return null;
            }

            $this->searchIndexing = SearchIndexingConfigurationModel::of($data);
        }

        return $this->searchIndexing;
    }

    /**
     * <p>Holds configuration specific to <a href="ctp:api:type:BusinessUnit">Business Units</a>.</p>
     *
     *
     * @return null|BusinessUnitConfiguration
     */
    public function getBusinessUnits()
    {
        if (is_null($this->businessUnits)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_BUSINESS_UNITS);
            if (is_null($data)) {
                return null;
            }

            $this->businessUnits = BusinessUnitConfigurationModel::of($data);
        }

        return $this->businessUnits;
    }


    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?array $countries
     */
    public function setCountries(?array $countries): void
    {
        $this->countries = $countries;
    }

    /**
     * @param ?array $currencies
     */
    public function setCurrencies(?array $currencies): void
    {
        $this->currencies = $currencies;
    }

    /**
     * @param ?array $languages
     */
    public function setLanguages(?array $languages): void
    {
        $this->languages = $languages;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?string $trialUntil
     */
    public function setTrialUntil(?string $trialUntil): void
    {
        $this->trialUntil = $trialUntil;
    }

    /**
     * @param ?MessagesConfiguration $messages
     */
    public function setMessages(?MessagesConfiguration $messages): void
    {
        $this->messages = $messages;
    }

    /**
     * @param ?CartsConfiguration $carts
     */
    public function setCarts(?CartsConfiguration $carts): void
    {
        $this->carts = $carts;
    }

    /**
     * @param ?ShoppingListsConfiguration $shoppingLists
     */
    public function setShoppingLists(?ShoppingListsConfiguration $shoppingLists): void
    {
        $this->shoppingLists = $shoppingLists;
    }

    /**
     * @param ?ShippingRateInputType $shippingRateInputType
     */
    public function setShippingRateInputType(?ShippingRateInputType $shippingRateInputType): void
    {
        $this->shippingRateInputType = $shippingRateInputType;
    }

    /**
     * @param ?ExternalOAuth $externalOAuth
     */
    public function setExternalOAuth(?ExternalOAuth $externalOAuth): void
    {
        $this->externalOAuth = $externalOAuth;
    }

    /**
     * @param ?SearchIndexingConfiguration $searchIndexing
     */
    public function setSearchIndexing(?SearchIndexingConfiguration $searchIndexing): void
    {
        $this->searchIndexing = $searchIndexing;
    }

    /**
     * @param ?BusinessUnitConfiguration $businessUnits
     */
    public function setBusinessUnits(?BusinessUnitConfiguration $businessUnits): void
    {
        $this->businessUnits = $businessUnits;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Project::FIELD_CREATED_AT]) && $data[Project::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Project::FIELD_CREATED_AT] = $data[Project::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
