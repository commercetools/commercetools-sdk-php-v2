<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Api\Models\Type\CustomFields;
use DateTimeImmutable;

interface CartDiscount extends LoggedResource
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
    const FIELD_REFERENCES = 'references';
    const FIELD_STACKING_MODE = 'stackingMode';
    const FIELD_CUSTOM = 'custom';

    /**
     * @return null|string
     */
    public function getId();

    /**
     * @return null|int
     */
    public function getVersion();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @return null|CartDiscountValue
     */
    public function getValue();

    /**
     * @return null|string
     */
    public function getCartPredicate();

    /**
     * @return null|CartDiscountTarget
     */
    public function getTarget();

    /**
     * @return null|string
     */
    public function getSortOrder();

    /**
     * @return null|bool
     */
    public function getIsActive();

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * @return null|bool
     */
    public function getRequiresDiscountCode();

    /**
     * @return null|ReferenceCollection
     */
    public function getReferences();

    /**
     * <p>Specifies whether the application of this discount causes the following discounts to be ignored.
     * Defaults to Stacking.</p>.
     *
     * @return null|string
     */
    public function getStackingMode();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

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

    public function setReferences(?ReferenceCollection $references): void;

    public function setStackingMode(?string $stackingMode): void;

    public function setCustom(?CustomFields $custom): void;
}
