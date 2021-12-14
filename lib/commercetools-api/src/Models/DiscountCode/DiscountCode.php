<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface DiscountCode extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_CODE = 'code';
    public const FIELD_CART_DISCOUNTS = 'cartDiscounts';
    public const FIELD_CART_PREDICATE = 'cartPredicate';
    public const FIELD_IS_ACTIVE = 'isActive';
    public const FIELD_REFERENCES = 'references';
    public const FIELD_MAX_APPLICATIONS = 'maxApplications';
    public const FIELD_MAX_APPLICATIONS_PER_CUSTOMER = 'maxApplicationsPerCustomer';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_GROUPS = 'groups';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_APPLICATION_VERSION = 'applicationVersion';

    /**
     * <p>The unique ID of the discount code.</p>
     *
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
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy();

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
     * to enable the related cart discounts in the cart.</p>
     *
     * @return null|string
     */
    public function getCode();

    /**
     * <p>The referenced matching cart discounts can be applied to the cart once the DiscountCode is added.</p>
     *
     * @return null|CartDiscountReferenceCollection
     */
    public function getCartDiscounts();

    /**
     * <p>The discount code can only be applied to carts that match this predicate.</p>
     *
     * @return null|string
     */
    public function getCartPredicate();

    /**
     * @return null|bool
     */
    public function getIsActive();

    /**
     * <p>The platform will generate this array from the cart predicate.
     * It contains the references of all the resources that are addressed in the predicate.</p>
     *
     * @return null|ReferenceCollection
     */
    public function getReferences();

    /**
     * <p>The discount code can only be applied <code>maxApplications</code> times.</p>
     *
     * @return null|int
     */
    public function getMaxApplications();

    /**
     * <p>The discount code can only be applied <code>maxApplicationsPerCustomer</code> times per customer.</p>
     *
     * @return null|int
     */
    public function getMaxApplicationsPerCustomer();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>The groups to which this discount code belong.</p>
     *
     * @return null|array
     */
    public function getGroups();

    /**
     * <p>The time from which the discount can be applied on a cart.
     * Before that time the code is invalid.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>The time until the discount can be applied on a cart.
     * After that time the code is invalid.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>Used for the internal platform only and registers the reservation of use of a discount code.
     * Its value is managed by the platform.
     * It can change at any time due to internal and external factors.
     * It should not be used in customer logic.</p>
     *
     * @return null|int
     */
    public function getApplicationVersion();

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
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?string $code
     */
    public function setCode(?string $code): void;

    /**
     * @param ?CartDiscountReferenceCollection $cartDiscounts
     */
    public function setCartDiscounts(?CartDiscountReferenceCollection $cartDiscounts): void;

    /**
     * @param ?string $cartPredicate
     */
    public function setCartPredicate(?string $cartPredicate): void;

    /**
     * @param ?bool $isActive
     */
    public function setIsActive(?bool $isActive): void;

    /**
     * @param ?ReferenceCollection $references
     */
    public function setReferences(?ReferenceCollection $references): void;

    /**
     * @param ?int $maxApplications
     */
    public function setMaxApplications(?int $maxApplications): void;

    /**
     * @param ?int $maxApplicationsPerCustomer
     */
    public function setMaxApplicationsPerCustomer(?int $maxApplicationsPerCustomer): void;

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;

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

    /**
     * @param ?int $applicationVersion
     */
    public function setApplicationVersion(?int $applicationVersion): void;
}
