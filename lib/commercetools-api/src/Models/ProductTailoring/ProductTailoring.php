<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ProductTailoring extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_KEY = 'key';
    public const FIELD_STORE = 'store';
    public const FIELD_PRODUCT = 'product';
    public const FIELD_PUBLISHED = 'published';
    public const FIELD_CURRENT = 'current';
    public const FIELD_STAGED = 'staged';
    public const FIELD_HAS_STAGED_CHANGES = 'hasStagedChanges';

    /**
     * <p>Unique identifier of the ProductTailoring.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the ProductTailoring.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the ProductTailoring was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the ProductTailoring was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>IDs and references that last modified the ProductTailoring.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>IDs and references that created the ProductTailoring.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>User-defined unique identifier of the ProductTailoring.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>The Store to which the ProductTailoring belongs.</p>
     *

     * @return null|StoreKeyReference
     */
    public function getStore();

    /**
     * <p>Reference to the Product the ProductTailoring belongs to.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p><code>true</code> if the ProductTailoring is published.</p>
     *

     * @return null|bool
     */
    public function getPublished();

    /**
     * <p>Current (published) data of the ProductTailoring.</p>
     *

     * @return null|ProductTailoringData
     */
    public function getCurrent();

    /**
     * <p>Staged (unpublished) data of the ProductTailoring.</p>
     *

     * @return null|ProductTailoringData
     */
    public function getStaged();

    /**
     * <p><code>true</code> if the <code>staged</code> data is different from the <code>current</code> data.</p>
     *

     * @return null|bool
     */
    public function getHasStagedChanges();

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
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?StoreKeyReference $store
     */
    public function setStore(?StoreKeyReference $store): void;

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?bool $published
     */
    public function setPublished(?bool $published): void;

    /**
     * @param ?ProductTailoringData $current
     */
    public function setCurrent(?ProductTailoringData $current): void;

    /**
     * @param ?ProductTailoringData $staged
     */
    public function setStaged(?ProductTailoringData $staged): void;

    /**
     * @param ?bool $hasStagedChanges
     */
    public function setHasStagedChanges(?bool $hasStagedChanges): void;
}
