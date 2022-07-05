<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Message\MessagesConfiguration;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Project extends JsonObject
{
    public const FIELD_VERSION = 'version';
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_COUNTRIES = 'countries';
    public const FIELD_CURRENCIES = 'currencies';
    public const FIELD_LANGUAGES = 'languages';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_TRIAL_UNTIL = 'trialUntil';
    public const FIELD_MESSAGES = 'messages';
    public const FIELD_CARTS = 'carts';
    public const FIELD_SHOPPING_LISTS = 'shoppingLists';
    public const FIELD_SHIPPING_RATE_INPUT_TYPE = 'shippingRateInputType';
    public const FIELD_EXTERNAL_O_AUTH = 'externalOAuth';
    public const FIELD_SEARCH_INDEXING = 'searchIndexing';

    /**
     * <p>Current version of the Project.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>User-defined unique identifier of the Project.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the Project.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Country code of the geographic location.</p>
     *

     * @return null|array
     */
    public function getCountries();

    /**
     * <p>Currency code of the country. A Project must have at least one currency.</p>
     *

     * @return null|array
     */
    public function getCurrencies();

    /**
     * <p>Language of the country. A Project must have at least one language.</p>
     *

     * @return null|array
     */
    public function getLanguages();

    /**
     * <p>Date and time (UTC) the Project was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date in YYYY-MM format specifying when the trial period for the Project ends. Only present on Projects in trial period.</p>
     *

     * @return null|string
     */
    public function getTrialUntil();

    /**
     * <p>Holds the configuration for the <a href="/../api/projects/messages">Messages Query</a> feature.</p>
     *

     * @return null|MessagesConfiguration
     */
    public function getMessages();

    /**
     * <p>Holds the configuration for the <a href="/../api/projects/carts">Carts</a> feature.</p>
     *

     * @return null|CartsConfiguration
     */
    public function getCarts();

    /**
     * <p>Holds the configuration for the <a href="/../api/projects/shoppingLists">Shopping Lists</a> feature. This field may not be present on Projects created before January 2020.</p>
     *

     * @return null|ShoppingListsConfiguration
     */
    public function getShoppingLists();

    /**
     * <p>Holds the configuration for the <a href="ctp:api:type:ShippingRatePriceTier">tiered shipping rates</a> feature.</p>
     *

     * @return null|ShippingRateInputType
     */
    public function getShippingRateInputType();

    /**
     * <p>Represents a RFC 7662 compliant <a href="https://datatracker.ietf.org/doc/html/rfc7662">OAuth 2.0 Token Introspection</a> endpoint.</p>
     *

     * @return null|ExternalOAuth
     */
    public function getExternalOAuth();

    /**
     * <p>Controls indexing of resources to be provided on high performance read-only search endpoints.</p>
     *

     * @return null|SearchIndexingConfiguration
     */
    public function getSearchIndexing();

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?array $countries
     */
    public function setCountries(?array $countries): void;

    /**
     * @param ?array $currencies
     */
    public function setCurrencies(?array $currencies): void;

    /**
     * @param ?array $languages
     */
    public function setLanguages(?array $languages): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?string $trialUntil
     */
    public function setTrialUntil(?string $trialUntil): void;

    /**
     * @param ?MessagesConfiguration $messages
     */
    public function setMessages(?MessagesConfiguration $messages): void;

    /**
     * @param ?CartsConfiguration $carts
     */
    public function setCarts(?CartsConfiguration $carts): void;

    /**
     * @param ?ShoppingListsConfiguration $shoppingLists
     */
    public function setShoppingLists(?ShoppingListsConfiguration $shoppingLists): void;

    /**
     * @param ?ShippingRateInputType $shippingRateInputType
     */
    public function setShippingRateInputType(?ShippingRateInputType $shippingRateInputType): void;

    /**
     * @param ?ExternalOAuth $externalOAuth
     */
    public function setExternalOAuth(?ExternalOAuth $externalOAuth): void;

    /**
     * @param ?SearchIndexingConfiguration $searchIndexing
     */
    public function setSearchIndexing(?SearchIndexingConfiguration $searchIndexing): void;
}
