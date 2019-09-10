<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Message\MessageConfiguration;
use Commercetools\Api\Models\Message\MessageConfigurationModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class ProjectModel extends JsonObjectModel implements Project
{
    
    public function __construct(
        ExternalOAuth $externalOAuth = null,
        ShippingRateInputType $shippingRateInputType = null,
        DateTimeImmutable $createdAt = null,
        array $languages = null,
        string $name = null,
        MessageConfiguration $messages = null,
        array $countries = null,
        string $trialUntil = null,
        int $version = null,
        string $key = null,
        array $currencies = null
    ) {
        $this->externalOAuth = $externalOAuth;
        $this->shippingRateInputType = $shippingRateInputType;
        $this->createdAt = $createdAt;
        $this->languages = $languages;
        $this->name = $name;
        $this->messages = $messages;
        $this->countries = $countries;
        $this->trialUntil = $trialUntil;
        $this->version = $version;
        $this->key = $key;
        $this->currencies = $currencies;
        
    }

    /**
     * @var ?ExternalOAuth
     */
    protected $externalOAuth;
    
    /**
     * @var ?ShippingRateInputType
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
     * @var ?MessageConfiguration
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
       if (is_null($this->externalOAuth)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Project::FIELD_EXTERNAL_O_AUTH);
           if (is_null($data)) {
               return null;
           }
           
           $this->externalOAuth = ExternalOAuthModel::of($data);
       }
       return $this->externalOAuth;
    }
    
    /**
     *
     * @return ShippingRateInputType|null
     */
    final public function getShippingRateInputType()
    {
       if (is_null($this->shippingRateInputType)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Project::FIELD_SHIPPING_RATE_INPUT_TYPE);
           if (is_null($data)) {
               return null;
           }
           $className = ShippingRateInputTypeModel::resolveDiscriminatorClass($data);
           $this->shippingRateInputType = $className::of($data);
       }
       return $this->shippingRateInputType;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       if (is_null($this->createdAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Project::FIELD_CREATED_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->createdAt = $data;
       }
       return $this->createdAt;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getLanguages()
    {
       if (is_null($this->languages)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(Project::FIELD_LANGUAGES);
           if (is_null($data)) {
               return null;
           }
           $this->languages = $data;
       }
       return $this->languages;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Project::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->name = (string)$data;
       }
       return $this->name;
    }
    
    /**
     *
     * @return MessageConfiguration|null
     */
    final public function getMessages()
    {
       if (is_null($this->messages)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Project::FIELD_MESSAGES);
           if (is_null($data)) {
               return null;
           }
           
           $this->messages = MessageConfigurationModel::of($data);
       }
       return $this->messages;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getCountries()
    {
       if (is_null($this->countries)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(Project::FIELD_COUNTRIES);
           if (is_null($data)) {
               return null;
           }
           $this->countries = $data;
       }
       return $this->countries;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTrialUntil()
    {
       if (is_null($this->trialUntil)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Project::FIELD_TRIAL_UNTIL);
           if (is_null($data)) {
               return null;
           }
           $this->trialUntil = (string)$data;
       }
       return $this->trialUntil;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       if (is_null($this->version)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(Project::FIELD_VERSION);
           if (is_null($data)) {
               return null;
           }
           $this->version = (int)$data;
       }
       return $this->version;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Project::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getCurrencies()
    {
       if (is_null($this->currencies)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(Project::FIELD_CURRENCIES);
           if (is_null($data)) {
               return null;
           }
           $this->currencies = $data;
       }
       return $this->currencies;
    }
    final public function setExternalOAuth(?ExternalOAuth $externalOAuth): void
    {
        $this->externalOAuth = $externalOAuth;
    }
    
    final public function setShippingRateInputType(?ShippingRateInputType $shippingRateInputType): void
    {
        $this->shippingRateInputType = $shippingRateInputType;
    }
    
    final public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
    
    final public function setLanguages(?array $languages): void
    {
        $this->languages = $languages;
    }
    
    final public function setName(?string $name): void
    {
        $this->name = $name;
    }
    
    final public function setMessages(?MessageConfiguration $messages): void
    {
        $this->messages = $messages;
    }
    
    final public function setCountries(?array $countries): void
    {
        $this->countries = $countries;
    }
    
    final public function setTrialUntil(?string $trialUntil): void
    {
        $this->trialUntil = $trialUntil;
    }
    
    final public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
    final public function setCurrencies(?array $currencies): void
    {
        $this->currencies = $currencies;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[Project::FIELD_CREATED_AT]) && $data[Project::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
           $data[Project::FIELD_CREATED_AT] = $data[Project::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}