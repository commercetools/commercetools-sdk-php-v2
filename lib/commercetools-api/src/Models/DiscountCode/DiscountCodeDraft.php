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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface DiscountCodeDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_CODE = 'code';
    public const FIELD_CART_DISCOUNTS = 'cartDiscounts';
    public const FIELD_CART_PREDICATE = 'cartPredicate';
    public const FIELD_IS_ACTIVE = 'isActive';
    public const FIELD_MAX_APPLICATIONS = 'maxApplications';
    public const FIELD_MAX_APPLICATIONS_PER_CUSTOMER = 'maxApplicationsPerCustomer';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_GROUPS = 'groups';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';

    /**
     * <p>User-defined unique identifier for the DiscountCode.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the DiscountCode.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Description of the DiscountCode.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>User-defined unique identifier for the DiscountCode that can be <a href="/../api/projects/carts#add-discountcode">added to the Cart</a> to apply the related <a href="ctp:api:type:CartDiscount">CartDiscounts</a>.
     * It cannot be modified after the DiscountCode is created.</p>
     *

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Specify what CartDiscounts the API applies when you add the DiscountCode to the Cart.</p>
     *

     * @return null|CartDiscountResourceIdentifierCollection
     */
    public function getCartDiscounts();

    /**
     * <p>DiscountCode can only be applied to Carts that match this predicate.</p>
     *

     * @return null|string
     */
    public function getCartPredicate();

    /**
     * <p>Only active DiscountCodes can be applied to the Cart.</p>
     *

     * @return null|bool
     */
    public function getIsActive();

    /**
     * <p>Number of times the DiscountCode can be applied.</p>
     * <p>If not set, the DiscountCode can be applied any number of times.</p>
     *

     * @return null|int
     */
    public function getMaxApplications();

    /**
     * <p>Number of times the DiscountCode can be applied per Customer.</p>
     * <p>If not set, the DiscountCode can be applied any number of times.</p>
     *

     * @return null|int
     */
    public function getMaxApplicationsPerCustomer();

    /**
     * <p>Custom Fields for the DiscountCode.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>Groups to which the DiscountCode will belong to.</p>
     *

     * @return null|array
     */
    public function getGroups();

    /**
     * <p>Date and time (UTC) from which the DiscountCode is effective. Must be earlier than <code>validUntil</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Date and time (UTC) until which the DiscountCode is effective. Must be later than <code>validFrom</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?string $code
     */
    public function setCode(?string $code): void;

    /**
     * @param ?CartDiscountResourceIdentifierCollection $cartDiscounts
     */
    public function setCartDiscounts(?CartDiscountResourceIdentifierCollection $cartDiscounts): void;

    /**
     * @param ?string $cartPredicate
     */
    public function setCartPredicate(?string $cartPredicate): void;

    /**
     * @param ?bool $isActive
     */
    public function setIsActive(?bool $isActive): void;

    /**
     * @param ?int $maxApplications
     */
    public function setMaxApplications(?int $maxApplications): void;

    /**
     * @param ?int $maxApplicationsPerCustomer
     */
    public function setMaxApplicationsPerCustomer(?int $maxApplicationsPerCustomer): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?array $groups
     */
    public function setGroups(?array $groups): void;

    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    /**
     * @param ?DateTimeImmutable $validUntil
     */
    public function setValidUntil(?DateTimeImmutable $validUntil): void;
}
