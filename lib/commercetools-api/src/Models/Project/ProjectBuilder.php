<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Message\MessageConfiguration;
use Commercetools\Api\Models\Message\MessageConfigurationBuilder;
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
     * @var null|MessageConfiguration|MessageConfigurationBuilder
     */
    private $messages;

    /**
     * @var null|ShippingRateInputType|ShippingRateInputTypeBuilder
     */
    private $shippingRateInputType;

    /**
     * @var null|ExternalOAuth|ExternalOAuthBuilder
     */
    private $externalOAuth;

    /**
     * @var null|CartsConfiguration|CartsConfigurationBuilder
     */
    private $carts;

    /**
     * @var null|SearchIndexingConfiguration|SearchIndexingConfigurationBuilder
     */
    private $searchIndexing;

    /**
     * <p>The current version of the project.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>The unique key of the project.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The name of the project.</p>
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     *
     * @return null|array
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * <p>A three-digit currency code as per <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     *
     * @return null|array
     */
    public function getCurrencies()
    {
        return $this->currencies;
    }

    /**
     * @return null|array
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>The time is in the format Year-Month <code>YYYY-MM</code>.</p>
     *
     * @return null|string
     */
    public function getTrialUntil()
    {
        return $this->trialUntil;
    }

    /**
     * @return null|MessageConfiguration
     */
    public function getMessages()
    {
        return $this->messages instanceof MessageConfigurationBuilder ? $this->messages->build() : $this->messages;
    }

    /**
     * @return null|ShippingRateInputType
     */
    public function getShippingRateInputType()
    {
        return $this->shippingRateInputType instanceof ShippingRateInputTypeBuilder ? $this->shippingRateInputType->build() : $this->shippingRateInputType;
    }

    /**
     * @return null|ExternalOAuth
     */
    public function getExternalOAuth()
    {
        return $this->externalOAuth instanceof ExternalOAuthBuilder ? $this->externalOAuth->build() : $this->externalOAuth;
    }

    /**
     * @return null|CartsConfiguration
     */
    public function getCarts()
    {
        return $this->carts instanceof CartsConfigurationBuilder ? $this->carts->build() : $this->carts;
    }

    /**
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
     * @param ?MessageConfiguration $messages
     * @return $this
     */
    public function withMessages(?MessageConfiguration $messages)
    {
        $this->messages = $messages;

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
     * @param ?CartsConfiguration $carts
     * @return $this
     */
    public function withCarts(?CartsConfiguration $carts)
    {
        $this->carts = $carts;

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
    public function withMessagesBuilder(?MessageConfigurationBuilder $messages)
    {
        $this->messages = $messages;

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
     * @deprecated use withCarts() instead
     * @return $this
     */
    public function withCartsBuilder(?CartsConfigurationBuilder $carts)
    {
        $this->carts = $carts;

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
            $this->messages instanceof MessageConfigurationBuilder ? $this->messages->build() : $this->messages,
            $this->shippingRateInputType instanceof ShippingRateInputTypeBuilder ? $this->shippingRateInputType->build() : $this->shippingRateInputType,
            $this->externalOAuth instanceof ExternalOAuthBuilder ? $this->externalOAuth->build() : $this->externalOAuth,
            $this->carts instanceof CartsConfigurationBuilder ? $this->carts->build() : $this->carts,
            $this->searchIndexing instanceof SearchIndexingConfigurationBuilder ? $this->searchIndexing->build() : $this->searchIndexing
        );
    }

    public static function of(): ProjectBuilder
    {
        return new self();
    }
}
