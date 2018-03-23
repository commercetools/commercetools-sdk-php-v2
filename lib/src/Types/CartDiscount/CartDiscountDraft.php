<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CartDiscount;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFields;

interface CartDiscountDraft extends JsonObject {
    const FIELD_NAME = 'name';
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
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @return CartDiscountValue
     */
    public function getValue();

    /**
     * @return string
     */
    public function getCartPredicate();

    /**
     * @return CartDiscountTarget
     */
    public function getTarget();

    /**
     * @return string
     */
    public function getSortOrder();

    /**
     * @return mixed
     */
    public function getIsActive();

    /**
     * @return \DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * @return \DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * @return mixed
     */
    public function getRequiresDiscountCode();

    /**
     * @return string
     */
    public function getStackingMode();

    /**
     * @return CustomFields
     */
    public function getCustom();

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
     * @param CartDiscountValue $value
     * @return $this
     */
    public function setValue(CartDiscountValue $value);

    /**
     * @param string $cartPredicate
     * @return $this
     */
    public function setCartPredicate(string $cartPredicate);

    /**
     * @param CartDiscountTarget $target
     * @return $this
     */
    public function setTarget(CartDiscountTarget $target);

    /**
     * @param string $sortOrder
     * @return $this
     */
    public function setSortOrder(string $sortOrder);

    /**
     * @param mixed $isActive
     * @return $this
     */
    public function setIsActive($isActive);

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

    /**
     * @param mixed $requiresDiscountCode
     * @return $this
     */
    public function setRequiresDiscountCode($requiresDiscountCode);

    /**
     * @param string $stackingMode
     * @return $this
     */
    public function setStackingMode(string $stackingMode);

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

}
