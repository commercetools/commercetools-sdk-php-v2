<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Message\MessageConfiguration;
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
     *
     * @return int|null
     */
    public function getVersion();
    
    /**
     *
     * @return string|null
     */
    public function getKey();
    
    /**
     *
     * @return string|null
     */
    public function getName();
    
    /**
     *
     * @return array|null
     */
    public function getCountries();
    
    /**
     *
     * @return array|null
     */
    public function getCurrencies();
    
    /**
     *
     * @return array|null
     */
    public function getLanguages();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getCreatedAt();
    
    /**
     *
     * @return string|null
     */
    public function getTrialUntil();
    
    /**
     *
     * @return MessageConfiguration|null
     */
    public function getMessages();
    
    /**
     *
     * @return ShippingRateInputType|null
     */
    public function getShippingRateInputType();
    
    /**
     *
     * @return ExternalOAuth|null
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