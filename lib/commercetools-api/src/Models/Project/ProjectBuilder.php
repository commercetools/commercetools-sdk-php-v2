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
use DateTimeImmutable;

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
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCountries(?array $countries)
    {
        $this->countries = $countries;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCurrencies(?array $currencies)
    {
        $this->currencies = $currencies;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLanguages(?array $languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTrialUntil(?string $trialUntil)
    {
        $this->trialUntil = $trialUntil;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMessages(?MessageConfiguration $messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingRateInputType(?ShippingRateInputType $shippingRateInputType)
    {
        $this->shippingRateInputType = $shippingRateInputType;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalOAuth(?ExternalOAuth $externalOAuth)
    {
        $this->externalOAuth = $externalOAuth;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMessagesBuilder(?MessageConfigurationBuilder $messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingRateInputTypeBuilder(?ShippingRateInputTypeBuilder $shippingRateInputType)
    {
        $this->shippingRateInputType = $shippingRateInputType;

        return $this;
    }

    /**
     * @return $this
     */
    public function withExternalOAuthBuilder(?ExternalOAuthBuilder $externalOAuth)
    {
        $this->externalOAuth = $externalOAuth;

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
            $this->externalOAuth instanceof ExternalOAuthBuilder ? $this->externalOAuth->build() : $this->externalOAuth
        );
    }

    public static function of(): ProjectBuilder
    {
        return new self();
    }
}
