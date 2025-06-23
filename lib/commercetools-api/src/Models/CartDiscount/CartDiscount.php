<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Api\Models\DiscountGroup\DiscountGroupReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface CartDiscount extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
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
    public const FIELD_REFERENCES = 'references';
    public const FIELD_STACKING_MODE = 'stackingMode';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_DISCOUNT_GROUP = 'discountGroup';

    /**
     * <p>Unique identifier of the CartDiscount.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the CartDiscount.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the CartDiscount was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the CartDiscount was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>IDs and references that last modified the CartDiscount.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>IDs and references that created the CartDiscount.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>Name of the CartDiscount.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>User-defined unique identifier of the CartDiscount.</p>
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

     * @return null|CartDiscountValue
     */
    public function getValue();

    /**
     * <p>Valid <a href="/../api/projects/predicates#cart-predicates">Cart Predicate</a>.</p>
     *

     * @return null|string
     */
    public function getCartPredicate();

    /**
     * <p>Segment of the Cart that is discounted.</p>
     * <p>Empty, if the <code>value</code> is <code>giftLineItem</code>.</p>
     *

     * @return null|CartDiscountTarget
     */
    public function getTarget();

    /**
     * <p>Value between <code>0</code> and <code>1</code> that determines the order in which the CartDiscounts are applied; a CartDiscount with a higher value is prioritized.</p>
     * <p>It is unique among all CartDiscounts and DiscountGroups.</p>
     * <p>If the CartDiscount is part of a DiscountGroup, it uses the sort order of the DiscountGroup.</p>
     *

     * @return null|string
     */
    public function getSortOrder();

    /**
     * <ul>
     * <li>If a value exists, the Cart Discount applies on <a href="ctp:api:type:Cart">Carts</a> having a <a href="ctp:api:type:Store">Store</a> matching any Store defined for this field.</li>
     * <li>If empty, the Cart Discount applies on all <a href="ctp:api:type:Cart">Carts</a>, irrespective of a Store.</li>
     * </ul>
     *

     * @return null|StoreKeyReferenceCollection
     */
    public function getStores();

    /**
     * <p>Indicates if the CartDiscount is active and can be applied to the Cart.</p>
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
     * <p>Indicates if the Discount is used in connection with a <a href="ctp:api:type:DiscountCode">DiscountCode</a>.</p>
     *

     * @return null|bool
     */
    public function getRequiresDiscountCode();

    /**
     * <p>References of all resources that are addressed in the predicate.
     * The API generates this array from the predicate.</p>
     *

     * @return null|ReferenceCollection
     */
    public function getReferences();

    /**
     * <p>Indicates whether the application of the CartDiscount causes other discounts to be ignored.</p>
     *

     * @return null|string
     */
    public function getStackingMode();

    /**
     * <p>Custom Fields of the CartDiscount.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Reference to a DiscountGroup that the CartDiscount belongs to.</p>
     *

     * @return null|DiscountGroupReference
     */
    public function getDiscountGroup();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void;

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
     * @param ?CartDiscountValue $value
     */
    public function setValue(?CartDiscountValue $value): void;

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
     * @param ?StoreKeyReferenceCollection $stores
     */
    public function setStores(?StoreKeyReferenceCollection $stores): void;

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
     * @param ?ReferenceCollection $references
     */
    public function setReferences(?ReferenceCollection $references): void;

    /**
     * @param ?string $stackingMode
     */
    public function setStackingMode(?string $stackingMode): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

    /**
     * @param ?DiscountGroupReference $discountGroup
     */
    public function setDiscountGroup(?DiscountGroupReference $discountGroup): void;
}
