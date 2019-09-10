<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Category\CategoryReferenceCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\Review\ReviewRatingStatistics;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;

interface ProductProjection extends BaseResource
{
    
    const FIELD_KEY = 'key';
    const FIELD_PRODUCT_TYPE = 'productType';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_SLUG = 'slug';
    const FIELD_CATEGORIES = 'categories';
    const FIELD_CATEGORY_ORDER_HINTS = 'categoryOrderHints';
    const FIELD_META_TITLE = 'metaTitle';
    const FIELD_META_DESCRIPTION = 'metaDescription';
    const FIELD_META_KEYWORDS = 'metaKeywords';
    const FIELD_SEARCH_KEYWORDS = 'searchKeywords';
    const FIELD_HAS_STAGED_CHANGES = 'hasStagedChanges';
    const FIELD_PUBLISHED = 'published';
    const FIELD_MASTER_VARIANT = 'masterVariant';
    const FIELD_VARIANTS = 'variants';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_STATE = 'state';
    const FIELD_REVIEW_RATING_STATISTICS = 'reviewRatingStatistics';

    /**
     *
     * @return string|null
     */
    public function getKey();
    
    /**
     *
     * @return ProductTypeReference|null
     */
    public function getProductType();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getName();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getDescription();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getSlug();
    
    /**
     *
     * @return CategoryReferenceCollection|null
     */
    public function getCategories();
    
    /**
     *
     * @return CategoryOrderHints|null
     */
    public function getCategoryOrderHints();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getMetaTitle();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getMetaDescription();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getMetaKeywords();
    
    /**
     *
     * @return SearchKeywords|null
     */
    public function getSearchKeywords();
    
    /**
     *
     * @return bool|null
     */
    public function getHasStagedChanges();
    
    /**
     *
     * @return bool|null
     */
    public function getPublished();
    
    /**
     *
     * @return ProductVariant|null
     */
    public function getMasterVariant();
    
    /**
     *
     * @return ProductVariantCollection|null
     */
    public function getVariants();
    
    /**
     *
     * @return TaxCategoryReference|null
     */
    public function getTaxCategory();
    
    /**
     *
     * @return StateReference|null
     */
    public function getState();
    
    /**
     *
     * @return ReviewRatingStatistics|null
     */
    public function getReviewRatingStatistics();
    public function setKey(?string $key): void;
    
    public function setProductType(?ProductTypeReference $productType): void;
    
    public function setName(?LocalizedString $name): void;
    
    public function setDescription(?LocalizedString $description): void;
    
    public function setSlug(?LocalizedString $slug): void;
    
    public function setCategories(?CategoryReferenceCollection $categories): void;
    
    public function setCategoryOrderHints(?CategoryOrderHints $categoryOrderHints): void;
    
    public function setMetaTitle(?LocalizedString $metaTitle): void;
    
    public function setMetaDescription(?LocalizedString $metaDescription): void;
    
    public function setMetaKeywords(?LocalizedString $metaKeywords): void;
    
    public function setSearchKeywords(?SearchKeywords $searchKeywords): void;
    
    public function setHasStagedChanges(?bool $hasStagedChanges): void;
    
    public function setPublished(?bool $published): void;
    
    public function setMasterVariant(?ProductVariant $masterVariant): void;
    
    public function setVariants(?ProductVariantCollection $variants): void;
    
    public function setTaxCategory(?TaxCategoryReference $taxCategory): void;
    
    public function setState(?StateReference $state): void;
    
    public function setReviewRatingStatistics(?ReviewRatingStatistics $reviewRatingStatistics): void;
}