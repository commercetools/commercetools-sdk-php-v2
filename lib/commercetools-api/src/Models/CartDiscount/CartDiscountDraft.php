<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFields;
use DateTimeImmutable;

interface CartDiscountDraft extends JsonObject
{
    
    const FIELD_NAME = 'name';
    const FIELD_KEY = 'key';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_VALUE = 'value';
    const FIELD_CART_PREDICATE = 'cartPredicate';
    const FIELD_TARGET = 'target';
    const FIELD_SORT_ORDER = 'sortOrder';
    const FIELD_IS_ACTIVE = 'isActive';
    const FIELD_VALID_FROM = 'validFrom';
    const FIELD_VALID_UNTIL = 'validUntil';
    const FIELD_REQUIRES_DISCOUNT_CODE = 'requiresDiscountCode';
    const FIELD_STACKING_MODE = 'stackingMode';
    const FIELD_CUSTOM = 'custom';

    /**
     *
     * @return LocalizedString|null
     */
    public function getName();
    
    /**
     *
     * @return string|null
     */
    public function getKey();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getDescription();
    
    /**
     *
     * @return CartDiscountValue|null
     */
    public function getValue();
    
    /**
     *
     * @return string|null
     */
    public function getCartPredicate();
    
    /**
     *
     * @return CartDiscountTarget|null
     */
    public function getTarget();
    
    /**
     *
     * @return string|null
     */
    public function getSortOrder();
    
    /**
     *
     * @return bool|null
     */
    public function getIsActive();
    
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
     * @return bool|null
     */
    public function getRequiresDiscountCode();
    
    /**
     * <p>Specifies whether the application of this discount causes the following discounts to be ignored.
    * Defaults to Stacking.</p>
     * @return string|null
     */
    public function getStackingMode();
    
    /**
     *
     * @return CustomFields|null
     */
    public function getCustom();
    public function setName(?LocalizedString $name): void;
    
    public function setKey(?string $key): void;
    
    public function setDescription(?LocalizedString $description): void;
    
    public function setValue(?CartDiscountValue $value): void;
    
    public function setCartPredicate(?string $cartPredicate): void;
    
    public function setTarget(?CartDiscountTarget $target): void;
    
    public function setSortOrder(?string $sortOrder): void;
    
    public function setIsActive(?bool $isActive): void;
    
    public function setValidFrom(?DateTimeImmutable $validFrom): void;
    
    public function setValidUntil(?DateTimeImmutable $validUntil): void;
    
    public function setRequiresDiscountCode(?bool $requiresDiscountCode): void;
    
    public function setStackingMode(?string $stackingMode): void;
    
    public function setCustom(?CustomFields $custom): void;
}