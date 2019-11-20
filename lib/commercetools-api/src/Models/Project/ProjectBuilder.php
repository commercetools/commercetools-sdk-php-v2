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
     * @var ExternalOAuth|?ExternalOAuthBuilder
     */
    private $externalOAuth;

    /**
     * @var ShippingRateInputType|?ShippingRateInputTypeBuilder
     */
    private $shippingRateInputType;

    /**
     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var ?array
     */
    private $languages;

    /**
     * @var ?string
     */
    private $name;

    /**
     * @var MessageConfiguration|?MessageConfigurationBuilder
     */
    private $messages;

    /**
     * @var ?array
     */
    private $countries;

    /**
     * @var ?string
     */
    private $trialUntil;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?array
     */
    private $currencies;

    /**
     * @return null|ExternalOAuth
     */
    public function getExternalOAuth()
    {
        return $this->externalOAuth instanceof ExternalOAuthBuilder ? $this->externalOAuth->build() : $this->externalOAuth;
    }

    /**
     * @return null|ShippingRateInputType
     */
    public function getShippingRateInputType()
    {
        return $this->shippingRateInputType instanceof ShippingRateInputTypeBuilder ? $this->shippingRateInputType->build() : $this->shippingRateInputType;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return null|array
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|MessageConfiguration
     */
    public function getMessages()
    {
        return $this->messages instanceof MessageConfigurationBuilder ? $this->messages->build() : $this->messages;
    }

    /**
     * @return null|array
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @return null|string
     */
    public function getTrialUntil()
    {
        return $this->trialUntil;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|array
     */
    public function getCurrencies()
    {
        return $this->currencies;
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
    public function withShippingRateInputType(?ShippingRateInputType $shippingRateInputType)
    {
        $this->shippingRateInputType = $shippingRateInputType;

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
    public function withLanguages(?array $languages)
    {
        $this->languages = $languages;

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
    public function withMessages(?MessageConfiguration $messages)
    {
        $this->messages = $messages;

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
    public function withTrialUntil(?string $trialUntil)
    {
        $this->trialUntil = $trialUntil;

        return $this;
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
    public function withCurrencies(?array $currencies)
    {
        $this->currencies = $currencies;

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
    public function withMessagesBuilder(?MessageConfigurationBuilder $messages)
    {
        $this->messages = $messages;

        return $this;
    }

    public function build(): Project
    {
        return new ProjectModel(
            ($this->externalOAuth instanceof ExternalOAuthBuilder ? $this->externalOAuth->build() : $this->externalOAuth),
            ($this->shippingRateInputType instanceof ShippingRateInputTypeBuilder ? $this->shippingRateInputType->build() : $this->shippingRateInputType),
            $this->createdAt,
            $this->languages,
            $this->name,
            ($this->messages instanceof MessageConfigurationBuilder ? $this->messages->build() : $this->messages),
            $this->countries,
            $this->trialUntil,
            $this->version,
            $this->key,
            $this->currencies
        );
    }

    public static function of(): ProjectBuilder
    {
        return new self();
    }
}
