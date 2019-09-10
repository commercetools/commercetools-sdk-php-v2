<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\CartDiscount\CartDiscountResourceIdentifierCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use DateTimeImmutable;

interface DiscountCodeDraft extends JsonObject
{
    
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_CODE = 'code';
    const FIELD_CART_DISCOUNTS = 'cartDiscounts';
    const FIELD_CART_PREDICATE = 'cartPredicate';
    const FIELD_IS_ACTIVE = 'isActive';
    const FIELD_MAX_APPLICATIONS = 'maxApplications';
    const FIELD_MAX_APPLICATIONS_PER_CUSTOMER = 'maxApplicationsPerCustomer';
    const FIELD_CUSTOM = 'custom';
    const FIELD_GROUPS = 'groups';
    const FIELD_VALID_FROM = 'validFrom';
    const FIELD_VALID_UNTIL = 'validUntil';

    /**
     *
     * @return LocalizedString|null
     */
    public function getName();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getDescription();
    
    /**
     *
     * @return string|null
     */
    public function getCode();
    
    /**
     *
     * @return CartDiscountResourceIdentifierCollection|null
     */
    public function getCartDiscounts();
    
    /**
     *
     * @return string|null
     */
    public function getCartPredicate();
    
    /**
     *
     * @return bool|null
     */
    public function getIsActive();
    
    /**
     *
     * @return int|null
     */
    public function getMaxApplications();
    
    /**
     *
     * @return int|null
     */
    public function getMaxApplicationsPerCustomer();
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    public function getCustom();
    
    /**
     *
     * @return array|null
     */
    public function getGroups();
    
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
    public function setName(?LocalizedString $name): void;
    
    public function setDescription(?LocalizedString $description): void;
    
    public function setCode(?string $code): void;
    
    public function setCartDiscounts(?CartDiscountResourceIdentifierCollection $cartDiscounts): void;
    
    public function setCartPredicate(?string $cartPredicate): void;
    
    public function setIsActive(?bool $isActive): void;
    
    public function setMaxApplications(?int $maxApplications): void;
    
    public function setMaxApplicationsPerCustomer(?int $maxApplicationsPerCustomer): void;
    
    public function setCustom(?CustomFieldsDraft $custom): void;
    
    public function setGroups(?array $groups): void;
    
    public function setValidFrom(?DateTimeImmutable $validFrom): void;
    
    public function setValidUntil(?DateTimeImmutable $validUntil): void;
}