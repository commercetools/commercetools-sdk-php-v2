<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\DiscountCode;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFields;
use Commercetools\Types\CartDiscount\CartDiscountReference;
use Commercetools\Types\CartDiscount\CartDiscountReferenceCollection;

interface DiscountCodeDraft extends JsonObject {
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
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @return string
     */
    public function getCode();

    /**
     * @return CartDiscountReferenceCollection
     */
    public function getCartDiscounts();

    /**
     * @return string
     */
    public function getCartPredicate();

    /**
     * @return mixed
     */
    public function getIsActive();

    /**
     * @return int
     */
    public function getMaxApplications();

    /**
     * @return int
     */
    public function getMaxApplicationsPerCustomer();

    /**
     * @return CustomFields
     */
    public function getCustom();

    /**
     * @return array
     */
    public function getGroups();

    /**
     * @return \DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * @return \DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

    /**
     * @param string $code
     * @return $this
     */
    public function setCode(string $code);

    /**
     * @param CartDiscountReferenceCollection $cartDiscounts
     * @return $this
     */
    public function setCartDiscounts(CartDiscountReferenceCollection $cartDiscounts);

    /**
     * @param string $cartPredicate
     * @return $this
     */
    public function setCartPredicate(string $cartPredicate);

    /**
     * @param mixed $isActive
     * @return $this
     */
    public function setIsActive($isActive);

    /**
     * @param int $maxApplications
     * @return $this
     */
    public function setMaxApplications(int $maxApplications);

    /**
     * @param int $maxApplicationsPerCustomer
     * @return $this
     */
    public function setMaxApplicationsPerCustomer(int $maxApplicationsPerCustomer);

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

    /**
     * @param array $groups
     * @return $this
     */
    public function setGroups($groups);

    /**
     * @param \DateTimeImmutable $validFrom
     * @return $this
     */
    public function setValidFrom($validFrom);

    /**
     * @param \DateTimeImmutable $validUntil
     * @return $this
     */
    public function setValidUntil($validUntil);

}
