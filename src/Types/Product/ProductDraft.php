<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Category\CategoryReference;
use Commercetools\Types\State\StateReference;
use Commercetools\Types\Category\CategoryReferenceCollection;
use Commercetools\Types\TaxCategory\TaxCategoryReference;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\ProductType\ProductTypeReference;

interface ProductDraft extends JsonObject {
    const FIELD_PRODUCT_TYPE = 'productType';
    const FIELD_NAME = 'name';
    const FIELD_SLUG = 'slug';
    const FIELD_KEY = 'key';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_CATEGORIES = 'categories';
    const FIELD_CATEGORY_ORDER_HINTS = 'categoryOrderHints';
    const FIELD_META_TITLE = 'metaTitle';
    const FIELD_META_DESCRIPTION = 'metaDescription';
    const FIELD_META_KEYWORDS = 'metaKeywords';
    const FIELD_MASTER_VARIANT = 'masterVariant';
    const FIELD_VARIANTS = 'variants';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_SEARCH_KEYWORDS = 'searchKeywords';
    const FIELD_STATE = 'state';
    const FIELD_PUBLISH = 'publish';

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
    public function getSlug();

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return LocalizedString
     */
    public function getDescription();

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
     * @return ProductVariantDraft
     */
    public function getMasterVariant();

    /**
     * @return ProductVariantDraftCollection
     */
    public function getVariants();

    /**
     * @return TaxCategoryReference
     */
    public function getTaxCategory();

    /**
     * @return SearchKeywords
     */
    public function getSearchKeywords();

    /**
     * @return StateReference
     */
    public function getState();

    /**
     * @return mixed
     */
    public function getPublish();

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
     * @param LocalizedString $slug
     * @return $this
     */
    public function setSlug(LocalizedString $slug);

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

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
     * @param ProductVariantDraft $masterVariant
     * @return $this
     */
    public function setMasterVariant(ProductVariantDraft $masterVariant);

    /**
     * @param ProductVariantDraftCollection $variants
     * @return $this
     */
    public function setVariants(ProductVariantDraftCollection $variants);

    /**
     * @param TaxCategoryReference $taxCategory
     * @return $this
     */
    public function setTaxCategory(TaxCategoryReference $taxCategory);

    /**
     * @param SearchKeywords $searchKeywords
     * @return $this
     */
    public function setSearchKeywords(SearchKeywords $searchKeywords);

    /**
     * @param StateReference $state
     * @return $this
     */
    public function setState(StateReference $state);

    /**
     * @param mixed $publish
     * @return $this
     */
    public function setPublish($publish);

}
