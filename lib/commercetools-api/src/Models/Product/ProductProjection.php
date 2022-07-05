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

    /**
     * <p>The unique ID of the Product.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>The current version of the Product.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>User-specific unique identifier of the Product.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**

     * @return null|ProductTypeReference
     */
    public function getProductType();

    /**

     * @return null|LocalizedString
     */
    public function getName();

    /**

     * @return null|LocalizedString
     */
    public function getDescription();

    /**

     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p>References to categories the product is in.</p>
     *

     * @return null|CategoryReferenceCollection
     */
    public function getCategories();

    /**

     * @return null|CategoryOrderHints
     */
    public function getCategoryOrderHints();

    /**

     * @return null|LocalizedString
     */
    public function getMetaTitle();

    /**

     * @return null|LocalizedString
     */
    public function getMetaDescription();

    /**

     * @return null|LocalizedString
     */
    public function getMetaKeywords();

    /**

     * @return null|SearchKeywords
     */
    public function getSearchKeywords();

    /**

     * @return null|bool
     */
    public function getHasStagedChanges();

    /**

     * @return null|bool
     */
    public function getPublished();

    /**

     * @return null|ProductVariant
     */
    public function getMasterVariant();

    /**

     * @return null|ProductVariantCollection
     */
    public function getVariants();

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
}
