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
use Commercetools\Api\Models\Warning\WarningObjectCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface Product extends BaseResource
{
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_KEY = 'key';
    public const FIELD_PRODUCT_TYPE = 'productType';
    public const FIELD_MASTER_DATA = 'masterData';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_STATE = 'state';
    public const FIELD_REVIEW_RATING_STATISTICS = 'reviewRatingStatistics';
    public const FIELD_PRICE_MODE = 'priceMode';
    public const FIELD_WARNINGS = 'warnings';

    /**
     * <p>Unique identifier of the Product.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the Product.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Date and time (UTC) the Product was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the Product was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>IDs and references that last modified the Product.</p>
     *

     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy();

    /**
     * <p>IDs and references that created the Product.</p>
     *

     * @return null|CreatedBy
     */
    public function getCreatedBy();

    /**
     * <p>User-defined unique identifier of the Product.</p>
     * <p>This is different from the <code>key</code> of a <a href="ctp:api:type:ProductVariant">ProductVariant</a>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>The Product Type defining the Attributes of the Product. Cannot be changed.</p>
     *

     * @return null|ProductTypeReference
     */
    public function getProductType();

    /**
     * <p>Contains the current and the staged representation of the product information.</p>
     *

     * @return null|ProductCatalogData
     */
    public function getMasterData();

    /**
     * <p>The <a href="ctp:api:type:TaxCategory">TaxCategory</a> of the Product.</p>
     *

     * @return null|TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * <p><a href="ctp:api:type:State">State</a> of the Product.</p>
     *

     * @return null|StateReference
     */
    public function getState();

    /**
     * <p>Review statistics of the Product.</p>
     *

     * @return null|ReviewRatingStatistics
     */
    public function getReviewRatingStatistics();

    /**
     * <p>Type of Price to be used when looking up a price for the Product.</p>
     *

     * @return null|string
     */
    public function getPriceMode();

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
     * @param ?ProductTypeReference $productType
     */
    public function setProductType(?ProductTypeReference $productType): void;

    /**
     * @param ?ProductCatalogData $masterData
     */
    public function setMasterData(?ProductCatalogData $masterData): void;

    /**
     * @param ?TaxCategoryReference $taxCategory
     */
    public function setTaxCategory(?TaxCategoryReference $taxCategory): void;

    /**
     * @param ?StateReference $state
     */
    public function setState(?StateReference $state): void;

    /**
     * @param ?ReviewRatingStatistics $reviewRatingStatistics
     */
    public function setReviewRatingStatistics(?ReviewRatingStatistics $reviewRatingStatistics): void;

    /**
     * @param ?string $priceMode
     */
    public function setPriceMode(?string $priceMode): void;

    /**
     * @param ?WarningObjectCollection $warnings
     */
    public function setWarnings(?WarningObjectCollection $warnings): void;
}
