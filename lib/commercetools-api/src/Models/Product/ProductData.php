<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Category\CategoryReferenceCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\JsonObject;

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
     * @return null|LocalizedString
     */
    public function getName();

    /**
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
    public function getDescription();

    /**
     * @return null|LocalizedString
     */
    public function getSlug();

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
     * @return null|ProductVariant
     */
    public function getMasterVariant();

    /**
     * @return null|ProductVariantCollection
     */
    public function getVariants();

    /**
     * @return null|SearchKeywords
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
