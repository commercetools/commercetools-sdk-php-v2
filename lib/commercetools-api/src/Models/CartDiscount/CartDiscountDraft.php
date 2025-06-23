<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\DiscountGroup\DiscountGroupResourceIdentifier;
use Commercetools\Api\Models\Store\StoreResourceIdentifierCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface CartDiscountDraft extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_KEY = 'key';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_VALUE = 'value';
    public const FIELD_CART_PREDICATE = 'cartPredicate';
    public const FIELD_TARGET = 'target';
    public const FIELD_SORT_ORDER = 'sortOrder';
    public const FIELD_STORES = 'stores';
    public const FIELD_IS_ACTIVE = 'isActive';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_REQUIRES_DISCOUNT_CODE = 'requiresDiscountCode';
    public const FIELD_STACKING_MODE = 'stackingMode';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_DISCOUNT_GROUP = 'discountGroup';

    /**
     * <p>Name of the CartDiscount.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>User-defined unique identifier for the CartDiscount.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Description of the CartDiscount.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Effect of the CartDiscount on the <code>target</code>.</p>
     *

     * @return null|CartDiscountValueDraft
     */
    public function getValue();

    /**
     * <p>Valid <a href="/../api/projects/predicates#cart-predicates">Cart Predicate</a>.</p>
     *

     * @return null|string
     */
    public function getCartPredicate();

    /**
     * <p>Segment of the Cart that will be discounted.</p>
     * <p>Must not be set if the <code>value</code> is <code>giftLineItem</code>.</p>
     *

     * @return null|CartDiscountTarget
     */
    public function getTarget();

    /**
     * <p>Value between <code>0</code> and <code>1</code> that determines the order in which the CartDiscounts will be applied; a CartDiscount with a higher value will be prioritized.</p>
     * <p>It must be unique among all CartDiscounts and DiscountGroups.</p>
     * <p>If the CartDiscount is part of a DiscountGroup, it will use the sort order of the DiscountGroup.</p>
     *

     * @return null|string
     */
    public function getSortOrder();

    /**
     * <ul>
     * <li>If defined, the Cart Discount applies on <a href="ctp:api:type:Cart">Carts</a> having a <a href="ctp:api:type:Store">Store</a> matching any Store defined for this field.</li>
     * <li>If not defined, the Cart Discount applies on all Carts, irrespective of a Store.</li>
     * </ul>
     * <p>If the referenced Stores exceed the <a href="/../api/limits#cart-discounts-stores">limit</a>, a <a href="ctp:api:type:MaxStoreReferencesReachedError">MaxStoreReferencesReached</a> error is returned.</p>
     * <p>If the referenced Stores exceed the <a href="/../api/limits#cart-discounts">limit</a> for Cart Discounts that do not require a Discount Code, a <a href="ctp:api:type:StoreCartDiscountsLimitReachedError">StoreCartDiscountsLimitReached</a> error is returned.</p>
     *

     * @return null|StoreResourceIdentifierCollection
     */
    public function getStores();

    /**
     * <p>Only active Discounts can be applied to the Cart.
     * If the <a href="/../api/limits#cart-discounts">limit</a> for active Cart Discounts is reached, a <a href="ctp:api:type:MaxCartDiscountsReachedError">MaxCartDiscountsReached</a> error is returned.</p>
     *

     * @return null|bool
     */
    public function getIsActive();

    /**
     * <p>Date and time (UTC) from which the Discount is effective.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Date and time (UTC) until which the Discount is effective.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>States whether the Discount can only be used in a connection with a <a href="ctp:api:type:DiscountCode">DiscountCode</a>.</p>
     *

     * @return null|bool
     */
    public function getRequiresDiscountCode();

    /**
     * <p>Specifies whether the application of this discount causes the following discounts to be ignored.</p>
     *

     * @return null|string
     */
    public function getStackingMode();

    /**
     * <p>Custom Fields of the CartDiscount.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>Reference to a DiscountGroup that the CartDiscount must belong to.</p>
     *

     * @return null|DiscountGroupResourceIdentifier
     */
    public function getDiscountGroup();

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?CartDiscountValueDraft $value
     */
    public function setValue(?CartDiscountValueDraft $value): void;

    /**
     * @param ?string $cartPredicate
     */
    public function setCartPredicate(?string $cartPredicate): void;

    /**
     * @param ?CartDiscountTarget $target
     */
    public function setTarget(?CartDiscountTarget $target): void;

    /**
     * @param ?string $sortOrder
     */
    public function setSortOrder(?string $sortOrder): void;

    /**
     * @param ?StoreResourceIdentifierCollection $stores
     */
    public function setStores(?StoreResourceIdentifierCollection $stores): void;

    /**
     * @param ?bool $isActive
     */
    public function setIsActive(?bool $isActive): void;

    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    /**
     * @param ?DateTimeImmutable $validUntil
     */
    public function setValidUntil(?DateTimeImmutable $validUntil): void;

    /**
     * @param ?bool $requiresDiscountCode
     */
    public function setRequiresDiscountCode(?bool $requiresDiscountCode): void;

    /**
     * @param ?string $stackingMode
     */
    public function setStackingMode(?string $stackingMode): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?DiscountGroupResourceIdentifier $discountGroup
     */
    public function setDiscountGroup(?DiscountGroupResourceIdentifier $discountGroup): void;
}
