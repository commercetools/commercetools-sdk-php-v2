<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\ReferenceCollection;
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
     * <p>The unique ID of the product discount</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>The current version of the product discount.</p>
     *
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
     * <p>User-specific unique identifier for a product discount.
     * Must be unique across a project.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @return null|ProductDiscountValue
     */
    public function getValue();

    /**
     * <p>A valid ProductDiscount Predicate.</p>
     *
     * @return null|string
     */
    public function getPredicate();

    /**
     * <p>The string contains a number between 0 and 1.
     * A discount with greater sortOrder is prioritized higher than a discount with lower sortOrder.
     * A sortOrder must be unambiguous.</p>
     *
     * @return null|string
     */
    public function getSortOrder();

    /**
     * <p>Only active discount will be applied to product prices.</p>
     *
     * @return null|bool
     */
    public function getIsActive();

    /**
     * <p>The platform will generate this array from the predicate.
     * It contains the references of all the resources that are addressed in the predicate.</p>
     *
     * @return null|ReferenceCollection
     */
    public function getReferences();

    /**
     * <p>The time from which the discount should be effective.
     * Please take Eventual Consistency into account for calculated product discount values.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidFrom();

    /**
     * <p>The time from which the discount should be ineffective.
     * Please take Eventual Consistency into account for calculated undiscounted values.</p>
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

    public function setKey(?string $key): void;

    public function setDescription(?LocalizedString $description): void;

    public function setValue(?ProductDiscountValue $value): void;

    public function setPredicate(?string $predicate): void;

    public function setSortOrder(?string $sortOrder): void;

    public function setIsActive(?bool $isActive): void;

    public function setReferences(?ReferenceCollection $references): void;

    public function setValidFrom(?DateTimeImmutable $validFrom): void;

    public function setValidUntil(?DateTimeImmutable $validUntil): void;
}
