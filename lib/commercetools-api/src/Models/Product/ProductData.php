<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Category\CategoryReferenceCollection;
use Commercetools\Api\Models\Common\LocalizedString;

interface ProductData extends JsonObject
{
    
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
     *
     * @return LocalizedString|null
     */
    public function getName();
    
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
    public function getDescription();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getSlug();
    
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
     * @return SearchKeywords|null
     */
    public function getSearchKeywords();
    public function setName(?LocalizedString $name): void;
    
    public function setCategories(?CategoryReferenceCollection $categories): void;
    
    public function setCategoryOrderHints(?CategoryOrderHints $categoryOrderHints): void;
    
    public function setDescription(?LocalizedString $description): void;
    
    public function setSlug(?LocalizedString $slug): void;
    
    public function setMetaTitle(?LocalizedString $metaTitle): void;
    
    public function setMetaDescription(?LocalizedString $metaDescription): void;
    
    public function setMetaKeywords(?LocalizedString $metaKeywords): void;
    
    public function setMasterVariant(?ProductVariant $masterVariant): void;
    
    public function setVariants(?ProductVariantCollection $variants): void;
    
    public function setSearchKeywords(?SearchKeywords $searchKeywords): void;
}