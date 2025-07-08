<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\DiscountCodes;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\CartDiscountKeyReferenceCollection;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Customfields\Custom;
use DateTimeImmutable;

interface DiscountCodeImport extends ImportResource
{
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_CODE = 'code';
    public const FIELD_CART_DISCOUNTS = 'cartDiscounts';
    public const FIELD_CART_PREDICATE = 'cartPredicate';
    public const FIELD_IS_ACTIVE = 'isActive';
    public const FIELD_MAX_APPLICATIONS = 'maxApplications';
    public const FIELD_MAX_APPLICATIONS_PER_CUSTOMER = 'maxApplicationsPerCustomer';
    public const FIELD_GROUPS = 'groups';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>User-defined unique identifier. If a <a href="ctp:api:type:DiscountCode">DiscountCode</a> with this <code>key</code> exists, it is updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Maps to <code>DiscountCode.name</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Maps to <code>DiscountCode.description</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Maps to <code>DiscountCode.code</code>. This value cannot be updated. Attempting to update this value will result in an <a href="/import-export/error#invalidfieldsupdateerror">InvalidFieldsUpdate</a> error.</p>
     *

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Maps to <code>DiscountCode.cartDiscounts</code>. If the referenced <a href="ctp:api:type:CartDiscount">CartDiscounts</a> do not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced CartDiscounts are created.</p>
     *

     * @return null|CartDiscountKeyReferenceCollection
     */
    public function getCartDiscounts();

    /**
     * <p>Maps to <code>DiscountCode.cartPredicate</code>.</p>
     *

     * @return null|string
     */
    public function getCartPredicate();

    /**
     * <p>Maps to <code>DiscountCode.isActive</code>.</p>
     *

     * @return null|bool
     */
    public function getIsActive();

    /**
     * <p>Maps to <code>DiscountCode.maxApplications</code>.</p>
     *

     * @return null|int
     */
    public function getMaxApplications();

    /**
     * <p>Maps to <code>DiscountCode.maxApplicationsPerCustomer</code>.</p>
     *

     * @return null|int
     */
    public function getMaxApplicationsPerCustomer();

    /**
     * <p>Maps to <code>DiscountCode.groups</code>.</p>
     *

     * @return null|array
     */
    public function getGroups();

    /**
     * <p>Maps to <code>DiscountCode.validFrom</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Maps to <code>DiscountCode.validUntil</code>.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

    /**
     * <p>Maps to <code>DiscountCode.custom</code>.</p>
     *

     * @return null|Custom
     */
    public function getCustom();

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
     * @param ?CartDiscountKeyReferenceCollection $cartDiscounts
     */
    public function setCartDiscounts(?CartDiscountKeyReferenceCollection $cartDiscounts): void;

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
     * @param ?Custom $custom
     */
    public function setCustom(?Custom $custom): void;
}
