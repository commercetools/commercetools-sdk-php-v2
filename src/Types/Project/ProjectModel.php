<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Builder\ProjectUpdateBuilder;
use Commercetools\Types\Message\MessageConfiguration;

class ProjectModel extends JsonObjectModel implements Project {
    /**
     * @var int
     */
    protected $version;
    /**
     * @var string
     */
    protected $key;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var CountryCodeCollection
     */
    protected $countries;
    /**
     * @var CurrencyCodeCollection
     */
    protected $currencies;
    /**
     * @var LocaleCollection
     */
    protected $languages;
    /**
     * @var \DateTimeImmutable
     */
    protected $createdAt;
    /**
     * @var \DateTimeImmutable
     */
    protected $trialUntil;
    /**
     * @var MessageConfiguration
     */
    protected $messages;
    /**
     * @var ShippingRateInputType
     */
    protected $shippingRateInputType;

    /**
     * @return int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            $value = $this->raw(Project::FIELD_VERSION);
            $value = (int)$value;
            $this->version = $value;
        }
        return $this->version;
    }
    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(Project::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(Project::FIELD_NAME);
            $value = (string)$value;
            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return CountryCodeCollection
     */
    public function getCountries()
    {
        if (is_null($this->countries)) {
            $value = $this->raw(Project::FIELD_COUNTRIES);
            if (is_null($value)) {
                return $this->mapData(CountryCodeCollection::class, null);
            }
            $value = $this->mapData(CountryCodeCollection::class, $value);
            $this->countries = $value;
        }
        return $this->countries;
    }
    /**
     * @return CurrencyCodeCollection
     */
    public function getCurrencies()
    {
        if (is_null($this->currencies)) {
            $value = $this->raw(Project::FIELD_CURRENCIES);
            if (is_null($value)) {
                return $this->mapData(CurrencyCodeCollection::class, null);
            }
            $value = $this->mapData(CurrencyCodeCollection::class, $value);
            $this->currencies = $value;
        }
        return $this->currencies;
    }
    /**
     * @return LocaleCollection
     */
    public function getLanguages()
    {
        if (is_null($this->languages)) {
            $value = $this->raw(Project::FIELD_LANGUAGES);
            if (is_null($value)) {
                return $this->mapData(LocaleCollection::class, null);
            }
            $value = $this->mapData(LocaleCollection::class, $value);
            $this->languages = $value;
        }
        return $this->languages;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            $value = $this->raw(Project::FIELD_CREATED_AT);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->createdAt = $value;
        }
        return $this->createdAt;
    }
    /**
     * @return \DateTimeImmutable
     */
    public function getTrialUntil()
    {
        if (is_null($this->trialUntil)) {
            $value = $this->raw(Project::FIELD_TRIAL_UNTIL);
            $dateTime = \DateTimeImmutable::createFromFormat('Y-m-d?H:i:s.uT', $value);
            $value = $dateTime ? $dateTime : null;

            $this->trialUntil = $value;
        }
        return $this->trialUntil;
    }
    /**
     * @return MessageConfiguration
     */
    public function getMessages()
    {
        if (is_null($this->messages)) {
            $value = $this->raw(Project::FIELD_MESSAGES);
            if (is_null($value)) {
                return $this->mapData(MessageConfiguration::class, null);
            }
            $value = $this->mapData(MessageConfiguration::class, $value);

            $this->messages = $value;
        }
        return $this->messages;
    }
    /**
     * @return ShippingRateInputType
     */
    public function getShippingRateInputType()
    {
        if (is_null($this->shippingRateInputType)) {
            $value = $this->raw(Project::FIELD_SHIPPING_RATE_INPUT_TYPE);
            $resolvedClass = $this->resolveDiscriminator(ShippingRateInputType::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->shippingRateInputType = $value;
        }
        return $this->shippingRateInputType;
    }

    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version)
    {
        $this->version = (int)$version;

        return $this;
    }
    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }
    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = (string)$name;

        return $this;
    }
    /**
     * @param CountryCodeCollection $countries
     * @return $this
     */
    public function setCountries(CountryCodeCollection $countries)
    {
        $this->countries = $countries;

        return $this;
    }
    /**
     * @param CurrencyCodeCollection $currencies
     * @return $this
     */
    public function setCurrencies(CurrencyCodeCollection $currencies)
    {
        $this->currencies = $currencies;

        return $this;
    }
    /**
     * @param LocaleCollection $languages
     * @return $this
     */
    public function setLanguages(LocaleCollection $languages)
    {
        $this->languages = $languages;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        if ($createdAt instanceof \DateTime) {
            $createdAt = \DateTimeImmutable::createFromMutable($createdAt);
        }
        if (!$createdAt instanceof \DateTimeImmutable) {
            $createdAt = new \DateTimeImmutable($createdAt);
        }
        $this->$createdAt = $createdAt;

        return $this;
    }
    /**
     * @param \DateTimeImmutable|\DateTime|string $trialUntil
     * @return $this
     */
    public function setTrialUntil($trialUntil)
    {
        if ($trialUntil instanceof \DateTime) {
            $trialUntil = \DateTimeImmutable::createFromMutable($trialUntil);
        }
        if (!$trialUntil instanceof \DateTimeImmutable) {
            $trialUntil = new \DateTimeImmutable($trialUntil);
        }
        $this->$trialUntil = $trialUntil;

        return $this;
    }
    /**
     * @param MessageConfiguration $messages
     * @return $this
     */
    public function setMessages(MessageConfiguration $messages)
    {
        $this->messages = $messages;

        return $this;
    }
    /**
     * @param ShippingRateInputType $shippingRateInputType
     * @return $this
     */
    public function setShippingRateInputType(ShippingRateInputType $shippingRateInputType)
    {
        $this->shippingRateInputType = $shippingRateInputType;

        return $this;
    }


    public function jsonSerialize() {
        $data = parent::jsonSerialize();
        if (isset($data[Project::FIELD_CREATED_AT]) && $data[Project::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Project::FIELD_CREATED_AT] = $data[Project::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        if (isset($data[Project::FIELD_TRIAL_UNTIL]) && $data[Project::FIELD_TRIAL_UNTIL] instanceof \DateTimeImmutable) {
            $data[Project::FIELD_TRIAL_UNTIL] = $data[Project::FIELD_TRIAL_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return $data;
    }

    /**
     * @return ProjectUpdateBuilder
     */
    public function update()
    {
        $builder = new ProjectUpdateBuilder();
        $builder->setMapper($this->getMapper());
        $builder->with($this);
        return $builder;
    }
}
