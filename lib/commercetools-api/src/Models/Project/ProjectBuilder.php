<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Message\MessageConfiguration;
use Commercetools\Api\Models\Message\MessageConfigurationBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<Project>
 */
final class ProjectBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?ExternalOAuthBuilder|ExternalOAuth
     */
    protected $externalOAuth;
    
    /**
     * @var ?ShippingRateInputTypeBuilder|ShippingRateInputType
     */
    protected $shippingRateInputType;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;
    
    /**
     * @var ?array
     */
    protected $languages;
    
    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?MessageConfigurationBuilder|MessageConfiguration
     */
    protected $messages;
    
    /**
     * @var ?array
     */
    protected $countries;
    
    /**
     * @var ?string
     */
    protected $trialUntil;
    
    /**
     * @var ?int
     */
    protected $version;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?array
     */
    protected $currencies;

    /**
     *
     * @return ExternalOAuth|null
     */
    final public function getExternalOAuth()
    {
       return ($this->externalOAuth instanceof ExternalOAuthBuilder ? $this->externalOAuth->build() : $this->externalOAuth);
    }
    
    /**
     *
     * @return ShippingRateInputType|null
     */
    final public function getShippingRateInputType()
    {
       return ($this->shippingRateInputType instanceof ShippingRateInputTypeBuilder ? $this->shippingRateInputType->build() : $this->shippingRateInputType);
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       return $this->createdAt;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getLanguages()
    {
       return $this->languages;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       return $this->name;
    }
    
    /**
     *
     * @return MessageConfiguration|null
     */
    final public function getMessages()
    {
       return ($this->messages instanceof MessageConfigurationBuilder ? $this->messages->build() : $this->messages);
    }
    
    /**
     *
     * @return array|null
     */
    final public function getCountries()
    {
       return $this->countries;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTrialUntil()
    {
       return $this->trialUntil;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       return $this->version;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       return $this->key;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getCurrencies()
    {
       return $this->currencies;
    }
    /**
     * @return $this
     */
    final public function withExternalOAuth(?ExternalOAuth $externalOAuth)
    {
        $this->externalOAuth = $externalOAuth;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingRateInputType(?ShippingRateInputType $shippingRateInputType)
    {
        $this->shippingRateInputType = $shippingRateInputType;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withLanguages(?array $languages)
    {
        $this->languages = $languages;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withName(?string $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMessages(?MessageConfiguration $messages)
    {
        $this->messages = $messages;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCountries(?array $countries)
    {
        $this->countries = $countries;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTrialUntil(?string $trialUntil)
    {
        $this->trialUntil = $trialUntil;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVersion(?int $version)
    {
        $this->version = $version;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withKey(?string $key)
    {
        $this->key = $key;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCurrencies(?array $currencies)
    {
        $this->currencies = $currencies;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withExternalOAuthBuilder(?ExternalOAuthBuilder $externalOAuth)
    {
        $this->externalOAuth = $externalOAuth;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withShippingRateInputTypeBuilder(?ShippingRateInputTypeBuilder $shippingRateInputType)
    {
        $this->shippingRateInputType = $shippingRateInputType;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMessagesBuilder(?MessageConfigurationBuilder $messages)
    {
        $this->messages = $messages;
        
        return $this;
    }
    
    public function build(): Project {
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