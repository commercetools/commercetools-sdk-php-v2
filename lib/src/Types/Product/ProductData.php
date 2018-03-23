<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Category\CategoryReference;
use Commercetools\Types\Category\CategoryReferenceCollection;
use Commercetools\Types\Common\LocalizedString;

interface ProductData extends JsonObject {
    const FIELD_NAME = 'name';
    const FIELD_CATEGORIES = 'categories';
    const FIELD_CATEGORY_ORDER_HINTS = 'categoryOrderHints';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_SLUG = 'slug';
    const FIELD_META_TITLE = 'metaTitle';
    const FIELD_META_DESCRIPTION = 'metaDescription';
    const FIELD_META_KEYWORDS = 'metaKeywords';
    const FIELD_MASTER_VARIANT = 'masterVariant';
    const FIELD_VARIANTS = 'variants';
    const FIELD_SEARCH_KEYWORDS = 'searchKeywords';

    /**
     * @return LocalizedString
     */
    public function getName();

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
    public function getDescription();

    /**
     * @return LocalizedString
     */
    public function getSlug();

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
     * @return ProductVariant
     */
    public function getMasterVariant();

    /**
     * @return ProductVariantCollection
     */
    public function getVariants();

    /**
     * @return SearchKeywords
     */
    public function getSearchKeywords();

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

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
     * @param SearchKeywords $searchKeywords
     * @return $this
     */
    public function setSearchKeywords(SearchKeywords $searchKeywords);

}
