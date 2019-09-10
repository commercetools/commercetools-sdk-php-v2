<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Category\CategoryResourceIdentifierCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;

interface ProductDraft extends JsonObject
{
    
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
     *
     * @return ProductTypeResourceIdentifier|null
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
    public function getSlug();
    
    /**
     *
     * @return string|null
     */
    public function getKey();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getDescription();
    
    /**
     *
     * @return CategoryResourceIdentifierCollection|null
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
     * @return ProductVariantDraft|null
     */
    public function getMasterVariant();
    
    /**
     *
     * @return ProductVariantDraftCollection|null
     */
    public function getVariants();
    
    /**
     *
     * @return TaxCategoryResourceIdentifier|null
     */
    public function getTaxCategory();
    
    /**
     *
     * @return SearchKeywords|null
     */
    public function getSearchKeywords();
    
    /**
     *
     * @return StateResourceIdentifier|null
     */
    public function getState();
    
    /**
     *
     * @return bool|null
     */
    public function getPublish();
    public function setProductType(?ProductTypeResourceIdentifier $productType): void;
    
    public function setName(?LocalizedString $name): void;
    
    public function setSlug(?LocalizedString $slug): void;
    
    public function setKey(?string $key): void;
    
    public function setDescription(?LocalizedString $description): void;
    
    public function setCategories(?CategoryResourceIdentifierCollection $categories): void;
    
    public function setCategoryOrderHints(?CategoryOrderHints $categoryOrderHints): void;
    
    public function setMetaTitle(?LocalizedString $metaTitle): void;
    
    public function setMetaDescription(?LocalizedString $metaDescription): void;
    
    public function setMetaKeywords(?LocalizedString $metaKeywords): void;
    
    public function setMasterVariant(?ProductVariantDraft $masterVariant): void;
    
    public function setVariants(?ProductVariantDraftCollection $variants): void;
    
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;
    
    public function setSearchKeywords(?SearchKeywords $searchKeywords): void;
    
    public function setState(?StateResourceIdentifier $state): void;
    
    public function setPublish(?bool $publish): void;
}