<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Message\MessagesConfiguration;
use Commercetools\Api\Models\Message\MessagesConfigurationBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<Project>
 */
final class ProjectBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?string
     */
    private $key;

    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?array
     */
    private $countries;

    /**

     * @var ?array
     */
    private $currencies;

    /**

     * @var ?array
     */
    private $languages;

    /**

     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**

     * @var ?string
     */
    private $trialUntil;

    /**

     * @var null|MessagesConfiguration|MessagesConfigurationBuilder
     */
    private $messages;

    /**

     * @var null|CartsConfiguration|CartsConfigurationBuilder
     */
    private $carts;

    /**

     * @var null|ShoppingListsConfiguration|ShoppingListsConfigurationBuilder
     */
    private $shoppingLists;

    /**

     * @var null|ShippingRateInputType|ShippingRateInputTypeBuilder
     */
    private $shippingRateInputType;

    /**

     * @var null|ExternalOAuth|ExternalOAuthBuilder
     */
    private $externalOAuth;

    /**

     * @var null|SearchIndexingConfiguration|SearchIndexingConfigurationBuilder
     */
    private $searchIndexing;

    /**
     * <p>Current version of the Project.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>User-defined unique identifier of the Project.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Name of the Project.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Country code of the geographic location.</p>
     *

     * @return null|array
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * <p>Currency code of the country. A Project must have at least one currency.</p>
     *

     * @return null|array
     */
    public function getCurrencies()
    {
        return $this->currencies;
    }

    /**
     * <p>Language of the country. A Project must have at least one language.</p>
     *

     * @return null|array
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * <p>Date and time (UTC) the Project was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Date in YYYY-MM format specifying when the trial period for the Project ends. Only present on Projects in trial period.</p>
     *

     * @return null|string
     */
    public function getTrialUntil()
    {
        return $this->trialUntil;
    }

    /**
     * <p>Holds the configuration for the <a href="/../api/projects/messages">Messages Query</a> feature.</p>
     *

     * @return null|MessagesConfiguration
     */
    public function getMessages()
    {
        return $this->messages instanceof MessagesConfigurationBuilder ? $this->messages->build() : $this->messages;
    }

    /**
     * <p>Holds the configuration for the <a href="/../api/projects/carts">Carts</a> feature.</p>
     *

     * @return null|CartsConfiguration
     */
    public function getCarts()
    {
        return $this->carts instanceof CartsConfigurationBuilder ? $this->carts->build() : $this->carts;
    }

    /**
     * <p>Holds the configuration for the <a href="/../api/projects/shoppingLists">Shopping Lists</a> feature. This field may not be present on Projects created before January 2020.</p>
     *

     * @return null|ShoppingListsConfiguration
     */
    public function getShoppingLists()
    {
        return $this->shoppingLists instanceof ShoppingListsConfigurationBuilder ? $this->shoppingLists->build() : $this->shoppingLists;
    }

    /**
     * <p>Holds the configuration for the <a href="ctp:api:type:ShippingRatePriceTier">tiered shipping rates</a> feature.</p>
     *

     * @return null|ShippingRateInputType
     */
    public function getShippingRateInputType()
    {
        return $this->shippingRateInputType instanceof ShippingRateInputTypeBuilder ? $this->shippingRateInputType->build() : $this->shippingRateInputType;
    }

    /**
     * <p>Represents a RFC 7662 compliant <a href="https://datatracker.ietf.org/doc/html/rfc7662">OAuth 2.0 Token Introspection</a> endpoint.</p>
     *

     * @return null|ExternalOAuth
     */
    public function getExternalOAuth()
    {
        return $this->externalOAuth instanceof ExternalOAuthBuilder ? $this->externalOAuth->build() : $this->externalOAuth;
    }

    /**
     * <p>Controls indexing of resources to be provided on high performance read-only search endpoints.</p>
     *

     * @return null|SearchIndexingConfiguration
     */
    public function getSearchIndexing()
    {
        return $this->searchIndexing instanceof SearchIndexingConfigurationBuilder ? $this->searchIndexing->build() : $this->searchIndexing;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?array $countries
     * @return $this
     */
    public function withCountries(?array $countries)
    {
        $this->countries = $countries;

        return $this;
    }

    /**
     * @param ?array $currencies
     * @return $this
     */
    public function withCurrencies(?array $currencies)
    {
        $this->currencies = $currencies;

        return $this;
    }

    /**
     * @param ?array $languages
     * @return $this
     */
    public function withLanguages(?array $languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?string $trialUntil
     * @return $this
     */
    public function withTrialUntil(?string $trialUntil)
    {
        $this->trialUntil = $trialUntil;

        return $this;
    }

    /**
     * @param ?MessagesConfiguration $messages
     * @return $this
     */
    public function withMessages(?MessagesConfiguration $messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * @param ?CartsConfiguration $carts
     * @return $this
     */
    public function withCarts(?CartsConfiguration $carts)
    {
        $this->carts = $carts;

        return $this;
    }

    /**
     * @param ?ShoppingListsConfiguration $shoppingLists
     * @return $this
     */
    public function withShoppingLists(?ShoppingListsConfiguration $shoppingLists)
    {
        $this->shoppingLists = $shoppingLists;

        return $this;
    }

    /**
     * @param ?ShippingRateInputType $shippingRateInputType
     * @return $this
     */
    public function withShippingRateInputType(?ShippingRateInputType $shippingRateInputType)
    {
        $this->shippingRateInputType = $shippingRateInputType;

        return $this;
    }

    /**
     * @param ?ExternalOAuth $externalOAuth
     * @return $this
     */
    public function withExternalOAuth(?ExternalOAuth $externalOAuth)
    {
        $this->externalOAuth = $externalOAuth;

        return $this;
    }

    /**
     * @param ?SearchIndexingConfiguration $searchIndexing
     * @return $this
     */
    public function withSearchIndexing(?SearchIndexingConfiguration $searchIndexing)
    {
        $this->searchIndexing = $searchIndexing;

        return $this;
    }

    /**
     * @deprecated use withMessages() instead
     * @return $this
     */
    public function withMessagesBuilder(?MessagesConfigurationBuilder $messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * @deprecated use withCarts() instead
     * @return $this
     */
    public function withCartsBuilder(?CartsConfigurationBuilder $carts)
    {
        $this->carts = $carts;

        return $this;
    }

    /**
     * @deprecated use withShoppingLists() instead
     * @return $this
     */
    public function withShoppingListsBuilder(?ShoppingListsConfigurationBuilder $shoppingLists)
    {
        $this->shoppingLists = $shoppingLists;

        return $this;
    }

    /**
     * @deprecated use withShippingRateInputType() instead
     * @return $this
     */
    public function withShippingRateInputTypeBuilder(?ShippingRateInputTypeBuilder $shippingRateInputType)
    {
        $this->shippingRateInputType = $shippingRateInputType;

        return $this;
    }

    /**
     * @deprecated use withExternalOAuth() instead
     * @return $this
     */
    public function withExternalOAuthBuilder(?ExternalOAuthBuilder $externalOAuth)
    {
        $this->externalOAuth = $externalOAuth;

        return $this;
    }

    /**
     * @deprecated use withSearchIndexing() instead
     * @return $this
     */
    public function withSearchIndexingBuilder(?SearchIndexingConfigurationBuilder $searchIndexing)
    {
        $this->searchIndexing = $searchIndexing;

        return $this;
    }

    public function build(): Project
    {
        return new ProjectModel(
            $this->version,
            $this->key,
            $this->name,
            $this->countries,
            $this->currencies,
            $this->languages,
            $this->createdAt,
            $this->trialUntil,
            $this->messages instanceof MessagesConfigurationBuilder ? $this->messages->build() : $this->messages,
            $this->carts instanceof CartsConfigurationBuilder ? $this->carts->build() : $this->carts,
            $this->shoppingLists instanceof ShoppingListsConfigurationBuilder ? $this->shoppingLists->build() : $this->shoppingLists,
            $this->shippingRateInputType instanceof ShippingRateInputTypeBuilder ? $this->shippingRateInputType->build() : $this->shippingRateInputType,
            $this->externalOAuth instanceof ExternalOAuthBuilder ? $this->externalOAuth->build() : $this->externalOAuth,
            $this->searchIndexing instanceof SearchIndexingConfigurationBuilder ? $this->searchIndexing->build() : $this->searchIndexing
        );
    }

    public static function of(): ProjectBuilder
    {
        return new self();
    }
}
