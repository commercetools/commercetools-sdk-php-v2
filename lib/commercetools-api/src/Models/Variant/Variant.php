<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Warning\WarningObjectCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Variant extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_KEY = 'key';
    public const FIELD_VARIANT_ID = 'variantId';
    public const FIELD_PRODUCT = 'product';
    public const FIELD_PUBLISHED = 'published';
    public const FIELD_CURRENT = 'current';
    public const FIELD_STAGED = 'staged';
    public const FIELD_WARNINGS = 'warnings';

    /**
     * <p>Unique identifier of the Variant.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Variant.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the Variant was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the Variant was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>IDs and references that last modified the Variant.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>IDs and references that created the Variant.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>User-defined unique identifier of the Variant.
     * This is different from <a href="ctp:api:type:Product">Product</a> <code>key</code>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>A unique, sequential identifier of the Variant within the parent Product.</p>
     *

     * @return null|int
     */
    public function getVariantId();

    /**
     * <p>Reference to the parent <a href="ctp:api:type:Product">Product</a> the Variant belongs to.</p>
     *

     * @return null|ProductReference
     */
    public function getProduct();

    /**
     * <p>Whether the Variant is published, <code>false</code> if it is unpublished.</p>
     *

     * @return null|bool
     */
    public function getPublished();

    /**
     * <p>The current data of the Variant.</p>
     *

     * @return null|VariantData
     */
    public function getCurrent();

    /**
     * <p>The staged data of the Variant.
     * Only present if there are staged changes that differ from the current data.</p>
     *

     * @return null|VariantData
     */
    public function getStaged();

    /**
     * <p>Warnings about processing of a request.
     * Appears in response to requests with response status code <code>202 Accepted</code>.</p>
     *

     * @return null|WarningObjectCollection
     */
    public function getWarnings();

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
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void;

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void;

    /**
     * @param ?bool $published
     */
    public function setPublished(?bool $published): void;

    /**
     * @param ?VariantData $current
     */
    public function setCurrent(?VariantData $current): void;

    /**
     * @param ?VariantData $staged
     */
    public function setStaged(?VariantData $staged): void;

    /**
     * @param ?WarningObjectCollection $warnings
     */
    public function setWarnings(?WarningObjectCollection $warnings): void;
}
