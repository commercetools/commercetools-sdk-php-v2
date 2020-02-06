<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\Review\ReviewRatingStatistics;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use DateTimeImmutable;

interface Product extends BaseResource
{
    const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    const FIELD_CREATED_BY = 'createdBy';
    const FIELD_KEY = 'key';
    const FIELD_PRODUCT_TYPE = 'productType';
    const FIELD_MASTER_DATA = 'masterData';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_STATE = 'state';
    const FIELD_REVIEW_RATING_STATISTICS = 'reviewRatingStatistics';

    /**
     * <p>The unique ID of the product.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * <p>The current version of the product.</p>
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
     * <p>User-specific unique identifier for the product.
     * <em>Product keys are different from product variant keys.</em></p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|ProductTypeReference
     */
    public function getProductType();

    /**
     * <p>The product data in the master catalog.</p>
     *
     * @return null|ProductCatalogData
     */
    public function getMasterData();

    /**
     * @return null|TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * @return null|StateReference
     */
    public function getState();

    /**
     * <p>Statistics about the review ratings taken into account for this product.</p>
     *
     * @return null|ReviewRatingStatistics
     */
    public function getReviewRatingStatistics();

    public function setId(?string $id): void;

    public function setVersion(?int $version): void;

    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void;

    public function setCreatedBy(?CreatedBy $createdBy): void;

    public function setKey(?string $key): void;

    public function setProductType(?ProductTypeReference $productType): void;

    public function setMasterData(?ProductCatalogData $masterData): void;

    public function setTaxCategory(?TaxCategoryReference $taxCategory): void;

    public function setState(?StateReference $state): void;

    public function setReviewRatingStatistics(?ReviewRatingStatistics $reviewRatingStatistics): void;
}
