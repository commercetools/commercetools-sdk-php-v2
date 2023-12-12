<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ProductDiscount extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_NAME = 'name';
    public const FIELD_KEY = 'key';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_VALUE = 'value';
    public const FIELD_PREDICATE = 'predicate';
    public const FIELD_SORT_ORDER = 'sortOrder';
    public const FIELD_IS_ACTIVE = 'isActive';
    public const FIELD_REFERENCES = 'references';
    public const FIELD_VALID_FROM = 'validFrom';
    public const FIELD_VALID_UNTIL = 'validUntil';

    /**
     * <p>Unique identifier of the ProductDiscount.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the ProductDiscount.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the ProductDiscount was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the ProductDiscount was last updated.</p>
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
     * <p>Name of the ProductDiscount.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>User-defined unique identifier of the ProductDiscount.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Description of the ProductDiscount.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Type of Discount and its corresponding value.</p>
     *

     * @return null|ProductDiscountValue
     */
    public function getValue();

    /**
     * <p>Valid <a href="/../api/projects/predicates#productdiscount-predicates">ProductDiscount predicate</a>.</p>
     *

     * @return null|string
     */
    public function getPredicate();

    /**
     * <p>Unique decimal value between 0 and 1 (stored as String literal) defining the order of Product Discounts to apply in case more than one is applicable and active.
     * A Product Discount with a higher value is prioritized.</p>
     *

     * @return null|string
     */
    public function getSortOrder();

    /**
     * <p>If <code>true</code> the Product Discount is applied to Products matching the <code>predicate</code>.</p>
     *

     * @return null|bool
     */
    public function getIsActive();

    /**
     * <p>References of all the resources that are addressed in the <code>predicate</code>.</p>
     *

     * @return null|ReferenceCollection
     */
    public function getReferences();

    /**
     * <p>Date and time (UTC) from which the Discount is effective.
     * Take <a href="/../api/general-concepts#eventual-consistency">Eventual Consistency</a> into account for calculated discount values.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>Date and time (UTC) until which the Discount is effective.
     * Take <a href="/../api/general-concepts#eventual-consistency">Eventual Consistency</a> into account for calculated undiscounted values.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil();

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
     * @param ?ProductDiscountValue $value
     */
    public function setValue(?ProductDiscountValue $value): void;

    /**
     * @param ?string $predicate
     */
    public function setPredicate(?string $predicate): void;

    /**
     * @param ?string $sortOrder
     */
    public function setSortOrder(?string $sortOrder): void;

    /**
     * @param ?bool $isActive
     */
    public function setIsActive(?bool $isActive): void;

    /**
     * @param ?ReferenceCollection $references
     */
    public function setReferences(?ReferenceCollection $references): void;

    /**
     * @param ?DateTimeImmutable $validFrom
     */
    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    /**
     * @param ?DateTimeImmutable $validUntil
     */
    public function setValidUntil(?DateTimeImmutable $validUntil): void;
}
