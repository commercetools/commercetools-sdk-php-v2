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
    public const FIELD_KEY = 'key';
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
     * <p>Unique identifier of the DiscountCode.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>User-defined unique identifier of the DiscountCode.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Current version of the DiscountCode.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the DiscountCode was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the DiscountCode was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/general-concepts#events-tracked">events not tracked</a>.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/../api/general-concepts#events-tracked">events not tracked</a>.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

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
     * <p>User-defined unique identifier of the DiscountCode <a href="/../api/projects/carts#add-discountcode">added to the Cart</a> to apply the related <a href="ctp:api:type:CartDiscount">CartDiscounts</a>.</p>
     *

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Reference to CartDiscounts that can be applied to the Cart once the DiscountCode is applied.</p>
     *

     * @return null|CartDiscountReferenceCollection
     */
    public function getCartDiscounts();

    /**
     * <p>DiscountCode can only be applied to Carts that match this predicate.</p>
     *

     * @return null|string
     */
    public function getCartPredicate();

    /**
     * <p>Indicates if the DiscountCode is active and can be applied to the Cart.</p>
     *

     * @return null|bool
     */
    public function getIsActive();

    /**
     * <p>Array generated from the Cart predicate.
     * It contains the references of all the resources that are addressed in the predicate.</p>
     *

     * @return null|ReferenceCollection
     */
    public function getReferences();

    /**
     * <p>Number of times the DiscountCode can be applied.
     * DiscountCode application is counted at the time of Order creation or edit. However, Order cancellation or deletion does not decrement the count.</p>
     *

     * @return null|int
     */
    public function getMaxApplications();

    /**
     * <p>Number of times the DiscountCode can be applied per Customer (anonymous Carts are not supported).
     * DiscountCode application is counted at the time of Order creation or edit. However, Order cancellation or deletion does not decrement the count.</p>
     *

     * @return null|int
     */
    public function getMaxApplicationsPerCustomer();

    /**
     * <p>Custom Fields of the DiscountCode.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * <p>Groups to which the DiscountCode belongs to.</p>
     *

     * @return null|array
     */
    public function getGroups();

    /**
     * <p>Date and time (UTC) from which the DiscountCode is effective.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Date and time (UTC) until which the DiscountCode is effective.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>Used and managed by the API and must not be used in customer logic.
     * The value can change at any time due to internal and external factors.</p>
     *

     * @return null|int
     */
    public function getApplicationVersion();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

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
