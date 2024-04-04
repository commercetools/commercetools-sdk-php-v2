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
     * <p>User-defined unique identifier. If a <a href="/../api/projects/discountCodes#discountcode">Discount Code</a> with this <code>key</code> exists, it will be updated with the imported data.</p>
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
     * <p>User-defined unique identifier of the DiscountCode that is used by the customer to apply the discount.</p>
     *

     * @return null|string
     */
    public function getCode();

    /**
     * <p>Reference to CartDiscounts that can be applied to the Cart once the DiscountCode is applied.</p>
     *

     * @return null|CartDiscountKeyReferenceCollection
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
     * <p>Number of times the DiscountCode can be applied. DiscountCode application is counted at the time of Order creation or update. However, Order cancellation or deletion does not decrement the count.</p>
     *

     * @return null|int
     */
    public function getMaxApplications();

    /**
     * <p>Number of times the DiscountCode can be applied per Customer (anonymous Carts are not supported). DiscountCode application is counted at the time of Order creation or update. However, Order cancellation or deletion does not decrement the count.</p>
     *

     * @return null|int
     */
    public function getMaxApplicationsPerCustomer();

    /**
     * <p>Groups to which the DiscountCode belongs.</p>
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
     * <p>Custom Fields of the DiscountCode.</p>
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
