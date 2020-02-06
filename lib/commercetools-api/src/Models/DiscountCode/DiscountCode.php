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
use DateTimeImmutable;

interface DiscountCode extends BaseResource
{
    const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    const FIELD_CREATED_BY = 'createdBy';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_CODE = 'code';
    const FIELD_CART_DISCOUNTS = 'cartDiscounts';
    const FIELD_CART_PREDICATE = 'cartPredicate';
    const FIELD_IS_ACTIVE = 'isActive';
    const FIELD_REFERENCES = 'references';
    const FIELD_MAX_APPLICATIONS = 'maxApplications';
    const FIELD_MAX_APPLICATIONS_PER_CUSTOMER = 'maxApplicationsPerCustomer';
    const FIELD_CUSTOM = 'custom';
    const FIELD_GROUPS = 'groups';
    const FIELD_VALID_FROM = 'validFrom';
    const FIELD_VALID_UNTIL = 'validUntil';

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
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>
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

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setName(?LocalizedString $name): void;

    public function setDescription(?LocalizedString $description): void;

    public function setCode(?string $code): void;

    public function setCartDiscounts(?CartDiscountReferenceCollection $cartDiscounts): void;

    public function setCartPredicate(?string $cartPredicate): void;

    public function setIsActive(?bool $isActive): void;

    public function setReferences(?ReferenceCollection $references): void;

    public function setMaxApplications(?int $maxApplications): void;

    public function setMaxApplicationsPerCustomer(?int $maxApplicationsPerCustomer): void;

    public function setCustom(?CustomFields $custom): void;

    public function setGroups(?array $groups): void;

    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    public function setValidUntil(?DateTimeImmutable $validUntil): void;
}
