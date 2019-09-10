<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Api\Models\Message\MessageConfiguration;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

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
    const FIELD_EXTERNAL_O_AUTH = 'externalOAuth';

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|array
     */
    public function getCountries();

    /**
     * @return null|array
     */
    public function getCurrencies();

    /**
     * @return null|array
     */
    public function getLanguages();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|string
     */
    public function getTrialUntil();

    /**
     * @return null|MessageConfiguration
     */
    public function getMessages();

    /**
     * @return null|ShippingRateInputType
     */
    public function getShippingRateInputType();

    /**
     * @return null|ExternalOAuth
     */
    public function getExternalOAuth();

    public function setVersion(?int $version): void;

    public function setKey(?string $key): void;

    public function setName(?string $name): void;

    public function setCountries(?array $countries): void;

    public function setCurrencies(?array $currencies): void;

    public function setLanguages(?array $languages): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setTrialUntil(?string $trialUntil): void;

    public function setMessages(?MessageConfiguration $messages): void;

    public function setShippingRateInputType(?ShippingRateInputType $shippingRateInputType): void;

    public function setExternalOAuth(?ExternalOAuth $externalOAuth): void;
}
