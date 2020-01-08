<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\CartDiscount\CartDiscountResourceIdentifierCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\JsonObject;
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
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Unique identifier of this discount code.
     * This value is added to the cart
     * to enable the related cart discounts in the cart.</p>.
     *
     * @return null|string
     */
    public function getCode();

    /**
     * <p>The referenced matching cart discounts can be applied to the cart once the discount code is added.
     * The number of cart discounts in a discount code is limited to <strong>10</strong>.</p>.
     *
     * @return null|CartDiscountResourceIdentifierCollection
     */
    public function getCartDiscounts();

    /**
     * <p>The discount code can only be applied to carts that match this predicate.</p>.
     *
     * @return null|string
     */
    public function getCartPredicate();

    /**
     * @return null|bool
     */
    public function getIsActive();

    /**
     * @return null|int
     */
    public function getMaxApplications();

    /**
     * @return null|int
     */
    public function getMaxApplicationsPerCustomer();

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>The groups to which this discount code shall belong to.</p>.
     *
     * @return null|array
     */
    public function getGroups();

    /**
     * <p>The time from which the discount can be applied on a cart.
     * Before that time the code is invalid.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>The time until the discount can be applied on a cart.
     * After that time the code is invalid.</p>.
     *
     * @return null|DateTimeImmutable
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
