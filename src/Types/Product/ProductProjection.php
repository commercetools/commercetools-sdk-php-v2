<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Category\CategoryReference;
use Commercetools\Types\State\StateReference;
use Commercetools\Types\Category\CategoryReferenceCollection;
use Commercetools\Types\TaxCategory\TaxCategoryReference;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\ProductType\ProductTypeReference;
use Commercetools\Types\Review\ReviewRatingStatistics;
use Commercetools\Types\Common\Resource;

interface ProductProjection extends Resource {
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
     * @return string
     */
    public function getKey();

    /**
     * @return ProductTypeReference
     */
    public function getProductType();

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @return LocalizedString
     */
    public function getSlug();

    /**
     * @return CategoryReferenceCollection
     */
    public function getCategories();

    /**
     * @return CategoryOrderHints
     */
    public function getCategoryOrderHints();

    /**
     * @return LocalizedString
     */
    public function getMetaTitle();

    /**
     * @return LocalizedString
     */
    public function getMetaDescription();

    /**
     * @return LocalizedString
     */
    public function getMetaKeywords();

    /**
     * @return SearchKeywords
     */
    public function getSearchKeywords();

    /**
     * @return mixed
     */
    public function getHasStagedChanges();

    /**
     * @return mixed
     */
    public function getPublished();

    /**
     * @return ProductVariant
     */
    public function getMasterVariant();

    /**
     * @return ProductVariantCollection
     */
    public function getVariants();

    /**
     * @return TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * @return StateReference
     */
    public function getState();

    /**
     * @return ReviewRatingStatistics
     */
    public function getReviewRatingStatistics();

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param ProductTypeReference $productType
     * @return $this
     */
    public function setProductType(ProductTypeReference $productType);

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

    /**
     * @param LocalizedString $slug
     * @return $this
     */
    public function setSlug(LocalizedString $slug);

    /**
     * @param CategoryReferenceCollection $categories
     * @return $this
     */
    public function setCategories(CategoryReferenceCollection $categories);

    /**
     * @param CategoryOrderHints $categoryOrderHints
     * @return $this
     */
    public function setCategoryOrderHints(CategoryOrderHints $categoryOrderHints);

    /**
     * @param LocalizedString $metaTitle
     * @return $this
     */
    public function setMetaTitle(LocalizedString $metaTitle);

    /**
     * @param LocalizedString $metaDescription
     * @return $this
     */
    public function setMetaDescription(LocalizedString $metaDescription);

    /**
     * @param LocalizedString $metaKeywords
     * @return $this
     */
    public function setMetaKeywords(LocalizedString $metaKeywords);

    /**
     * @param SearchKeywords $searchKeywords
     * @return $this
     */
    public function setSearchKeywords(SearchKeywords $searchKeywords);

    /**
     * @param mixed $hasStagedChanges
     * @return $this
     */
    public function setHasStagedChanges($hasStagedChanges);

    /**
     * @param mixed $published
     * @return $this
     */
    public function setPublished($published);

    /**
     * @param ProductVariant $masterVariant
     * @return $this
     */
    public function setMasterVariant(ProductVariant $masterVariant);

    /**
     * @param ProductVariantCollection $variants
     * @return $this
     */
    public function setVariants(ProductVariantCollection $variants);

    /**
     * @param TaxCategoryReference $taxCategory
     * @return $this
     */
    public function setTaxCategory(TaxCategoryReference $taxCategory);

    /**
     * @param StateReference $state
     * @return $this
     */
    public function setState(StateReference $state);

    /**
     * @param ReviewRatingStatistics $reviewRatingStatistics
     * @return $this
     */
    public function setReviewRatingStatistics(ReviewRatingStatistics $reviewRatingStatistics);

}
