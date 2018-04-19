<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Base\JsonObject;

use Commercetools\Builder\ProjectUpdateBuilder;
use Commercetools\Types\Message\MessageConfiguration;

interface Project extends JsonObject
{
    const FIELD_VERSION = 'version';
    const FIELD_KEY = 'key';
    const FIELD_NAME = 'name';
    const FIELD_COUNTRIES = 'countries';
    const FIELD_CURRENCIES = 'currencies';
    const FIELD_LANGUAGES = 'languages';
    const FIELD_CREATED_AT = 'createdAt';
    const FIELD_TRIAL_UNTIL = 'trialUntil';
    const FIELD_MESSAGES = 'messages';
    const FIELD_SHIPPING_RATE_INPUT_TYPE = 'shippingRateInputType';

    /**
     * @return int
     */
    public function getVersion();

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return array
     */
    public function getCountries();

    /**
     * @return array
     */
    public function getCurrencies();

    /**
     * @return array
     */
    public function getLanguages();

    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return \DateTimeImmutable
     */
    public function getTrialUntil();

    /**
     * @return MessageConfiguration
     */
    public function getMessages();

    /**
     * @return ShippingRateInputType
     */
    public function getShippingRateInputType();

    /**
     * @param int $version
     * @return $this
     */
    public function setVersion(int $version);

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param array $countries
     * @return $this
     */
    public function setCountries(array $countries);

    /**
     * @param array $currencies
     * @return $this
     */
    public function setCurrencies(array $currencies);

    /**
     * @param array $languages
     * @return $this
     */
    public function setLanguages(array $languages);

    /**
     * @param \DateTimeImmutable $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * @param \DateTimeImmutable $trialUntil
     * @return $this
     */
    public function setTrialUntil($trialUntil);

    /**
     * @param MessageConfiguration $messages
     * @return $this
     */
    public function setMessages(MessageConfiguration $messages);

    /**
     * @param ShippingRateInputType $shippingRateInputType
     * @return $this
     */
    public function setShippingRateInputType(ShippingRateInputType $shippingRateInputType);

    /**
     * @return ProjectUpdateBuilder
     */
    public function update();
}
