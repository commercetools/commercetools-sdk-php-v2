<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\CustomerGroup\CustomerGroupReference;
use Commercetools\Api\Models\Type\CustomFields;
use DateTimeImmutable;

interface ScopedPrice extends JsonObject
{
    
    const FIELD_ID = 'id';
    const FIELD_VALUE = 'value';
    const FIELD_CURRENT_VALUE = 'currentValue';
    const FIELD_COUNTRY = 'country';
    const FIELD_CUSTOMER_GROUP = 'customerGroup';
    const FIELD_CHANNEL = 'channel';
    const FIELD_VALID_FROM = 'validFrom';
    const FIELD_VALID_UNTIL = 'validUntil';
    const FIELD_DISCOUNTED = 'discounted';
    const FIELD_CUSTOM = 'custom';

    /**
     *
     * @return string|null
     */
    public function getId();
    
    /**
     *
     * @return TypedMoney|null
     */
    public function getValue();
    
    /**
     *
     * @return TypedMoney|null
     */
    public function getCurrentValue();
    
    /**
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>
     * @return string|null
     */
    public function getCountry();
    
    /**
     *
     * @return CustomerGroupReference|null
     */
    public function getCustomerGroup();
    
    /**
     *
     * @return ChannelReference|null
     */
    public function getChannel();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getValidFrom();
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    public function getValidUntil();
    
    /**
     *
     * @return DiscountedPrice|null
     */
    public function getDiscounted();
    
    /**
     *
     * @return CustomFields|null
     */
    public function getCustom();
    public function setId(?string $id): void;
    
    public function setValue(?TypedMoney $value): void;
    
    public function setCurrentValue(?TypedMoney $currentValue): void;
    
    public function setCountry(?string $country): void;
    
    public function setCustomerGroup(?CustomerGroupReference $customerGroup): void;
    
    public function setChannel(?ChannelReference $channel): void;
    
    public function setValidFrom(?DateTimeImmutable $validFrom): void;
    
    public function setValidUntil(?DateTimeImmutable $validUntil): void;
    
    public function setDiscounted(?DiscountedPrice $discounted): void;
    
    public function setCustom(?CustomFields $custom): void;
}