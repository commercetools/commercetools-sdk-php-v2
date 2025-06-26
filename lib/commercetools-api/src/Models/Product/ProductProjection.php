<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Category\CategoryReferenceCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\Review\ReviewRatingStatistics;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ProductProjection extends BaseResource
{
    public const FIELD_KEY = 'key';
    public const FIELD_PRODUCT_TYPE = 'productType';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_SLUG = 'slug';
    public const FIELD_CATEGORIES = 'categories';
    public const FIELD_CATEGORY_ORDER_HINTS = 'categoryOrderHints';
    public const FIELD_META_TITLE = 'metaTitle';
    public const FIELD_META_DESCRIPTION = 'metaDescription';
    public const FIELD_META_KEYWORDS = 'metaKeywords';
    public const FIELD_SEARCH_KEYWORDS = 'searchKeywords';
    public const FIELD_HAS_STAGED_CHANGES = 'hasStagedChanges';
    public const FIELD_PUBLISHED = 'published';
    public const FIELD_MASTER_VARIANT = 'masterVariant';
    public const FIELD_VARIANTS = 'variants';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_STATE = 'state';
    public const FIELD_REVIEW_RATING_STATISTICS = 'reviewRatingStatistics';
    public const FIELD_PRICE_MODE = 'priceMode';
    public const FIELD_ATTRIBUTES = 'attributes';

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Current version of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>User-defined unique identifier of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Date and time (UTC) the ProductProjection was initially created.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>Date and time (UTC) the ProductProjection was last updated.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt();

    /**
     * <p>The <a href="ctp:api:type:ProductType">ProductType</a> defining the Attributes of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|ProductTypeReference
     */
    public function getProductType();

    /**
     * <p>Name of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Description of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>User-defined identifier used in a deep-link URL for the <a href="ctp:api:type:Product">Product</a>.
     * Must be unique across a Project, but can be the same for Products in different locales.
     * Matches the pattern <code>[a-zA-Z0-9_-]{2,256}</code>.
     * For <a href="/../api/predicates/query#performance-considerations">good performance</a>, indexes are provided for the first 15 <code>languages</code> set in the <a href="ctp:api:type:Project">Project</a>.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p><a href="ctp:api:type:Category">Categories</a> assigned to the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|CategoryReferenceCollection
     */
    public function getCategories();

    /**
     * <p>Order of <a href="ctp:api:type:Product">Product</a> in <a href="ctp:api:type:Category">Categories</a>.</p>
     *

     * @return null|CategoryOrderHints
     */
    public function getCategoryOrderHints();

    /**
     * <p>Title of the <a href="ctp:api:type:Product">Product</a> displayed in search results.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaTitle();

    /**
     * <p>Description of the <a href="ctp:api:type:Product">Product</a> displayed in search results below the meta title.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaDescription();

    /**
     * <p>Keywords that give additional information about the <a href="ctp:api:type:Product">Product</a> to search engines.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaKeywords();

    /**
     * <p>Used by <a href="/../api/projects/products-suggestions">Product Suggestions</a>, but is also considered for a <a href="ctp:api:type:FullTextSearch">full text search</a>.</p>
     *

     * @return null|SearchKeywords
     */
    public function getSearchKeywords();

    /**
     * <p><code>true</code> if the staged data is different from the current data.</p>
     *

     * @return null|bool
     */
    public function getHasStagedChanges();

    /**
     * <p><code>true</code> if the <a href="ctp:api:type:Product">Product</a> is <a href="ctp:api:type:CurrentStaged">published</a>.</p>
     *

     * @return null|bool
     */
    public function getPublished();

    /**
     * <p>The Master Variant of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|ProductVariant
     */
    public function getMasterVariant();

    /**
     * <p>Additional Product Variants.</p>
     *

     * @return null|ProductVariantCollection
     */
    public function getVariants();

    /**
     * <p>The <a href="ctp:api:type:TaxCategory">TaxCategory</a> of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * <p><a href="ctp:api:type:State">State</a> of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|StateReference
     */
    public function getState();

    /**
     * <p>Review statistics of the <a href="ctp:api:type:Product">Product</a>.</p>
     *

     * @return null|ReviewRatingStatistics
     */
    public function getReviewRatingStatistics();

    /**
     * <p>Indicates whether the Prices of the Product Projection are <a href="ctp:api:type:Price">embedded</a> or <a href="ctp:api:type:StandalonePrice">standalone</a>. <a href="#prices">Projecting Prices</a> only works with <code>Embedded</code>, there is currently no support for <code>Standalone</code>.</p>
     *

     * @return null|string
     */
    public function getPriceMode();

    /**
     * <p>Attributes according to the respective <a href="ctp:api:type:AttributeDefinitionDraft">AttributeDefinition</a>.</p>
     *

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void;

    /**
     * @param ?ProductTypeReference $productType
     */
    public function setProductType(?ProductTypeReference $productType): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void;

    /**
     * @param ?CategoryReferenceCollection $categories
     */
    public function setCategories(?CategoryReferenceCollection $categories): void;

    /**
     * @param ?CategoryOrderHints $categoryOrderHints
     */
    public function setCategoryOrderHints(?CategoryOrderHints $categoryOrderHints): void;

    /**
     * @param ?LocalizedString $metaTitle
     */
    public function setMetaTitle(?LocalizedString $metaTitle): void;

    /**
     * @param ?LocalizedString $metaDescription
     */
    public function setMetaDescription(?LocalizedString $metaDescription): void;

    /**
     * @param ?LocalizedString $metaKeywords
     */
    public function setMetaKeywords(?LocalizedString $metaKeywords): void;

    /**
     * @param ?SearchKeywords $searchKeywords
     */
    public function setSearchKeywords(?SearchKeywords $searchKeywords): void;

    /**
     * @param ?bool $hasStagedChanges
     */
    public function setHasStagedChanges(?bool $hasStagedChanges): void;

    /**
     * @param ?bool $published
     */
    public function setPublished(?bool $published): void;

    /**
     * @param ?ProductVariant $masterVariant
     */
    public function setMasterVariant(?ProductVariant $masterVariant): void;

    /**
     * @param ?ProductVariantCollection $variants
     */
    public function setVariants(?ProductVariantCollection $variants): void;

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
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;
}
