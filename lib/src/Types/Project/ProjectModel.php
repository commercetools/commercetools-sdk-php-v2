<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Exception\InvalidArgumentException;
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
     * @var array
     */
    protected $countries;
    /**
     * @var array
     */
    protected $currencies;
    /**
     * @var array
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
     * @return array
     */
    public function getCountries()
    {
        if (is_null($this->countries)) {
            $value = $this->raw(Project::FIELD_COUNTRIES);
            $value = (array)$value;
            $this->countries = $value;
        }
        return $this->countries;
    }
    /**
     * @return array
     */
    public function getCurrencies()
    {
        if (is_null($this->currencies)) {
            $value = $this->raw(Project::FIELD_CURRENCIES);
            $value = (array)$value;
            $this->currencies = $value;
        }
        return $this->currencies;
    }
    /**
     * @return array
     */
    public function getLanguages()
    {
        if (is_null($this->languages)) {
            $value = $this->raw(Project::FIELD_LANGUAGES);
            $value = (array)$value;
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
     * @param array $countries
     * @return $this
     */
    public function setCountries(array $countries)
    {
        $this->countries = $countries;

        return $this;
    }
    /**
     * @param array $currencies
     * @return $this
     */
    public function setCurrencies(array $currencies)
    {
        $this->currencies = $currencies;

        return $this;
    }
    /**
     * @param array $languages
     * @return $this
     */
    public function setLanguages(array $languages)
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
