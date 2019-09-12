<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Import\Models\Common\ImportReference;
use Commercetools\Import\Models\Common\ImportReferenceCollection;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\LocalizedString;

interface ProductImport extends ImportResource
{
    const FIELD_NAME = 'name';
    const FIELD_PRODUCT_TYPE = 'productType';
    const FIELD_SLUG = 'slug';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_CATEGORIES = 'categories';
    const FIELD_CATEGORY_ORDER_HINTS = 'categoryOrderHints';
    const FIELD_META_TITLE = 'metaTitle';
    const FIELD_META_DESCRIPTION = 'metaDescription';
    const FIELD_META_KEYWORDS = 'metaKeywords';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_SEARCH_KEYWORDS = 'searchKeywords';
    const FIELD_STATE = 'state';

    /**
     * <p>The human readable name of the product.</p>.
     *
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getProductType();

    /**
     * <p>Human-readable identifiers usually used as deep-link URL to the related product. Each slug must be unique across a project,
     * but a product can have the same slug for different languages. Allowed are alphabetic, numeric, underscore (_) and hyphen (-) characters.</p>.
     *
     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @return null|ImportReferenceCollection
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
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getTaxCategory();

    /**
     * @return null|SearchKeywords
     */
    public function getSearchKeywords();

    /**
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getState();

    public function setName(?LocalizedString $name): void;

    public function setProductType(?ImportReference $productType): void;

    public function setSlug(?LocalizedString $slug): void;

    public function setDescription(?LocalizedString $description): void;

    public function setCategories(?ImportReferenceCollection $categories): void;

    public function setCategoryOrderHints(?CategoryOrderHints $categoryOrderHints): void;

    public function setMetaTitle(?LocalizedString $metaTitle): void;

    public function setMetaDescription(?LocalizedString $metaDescription): void;

    public function setMetaKeywords(?LocalizedString $metaKeywords): void;

    public function setTaxCategory(?ImportReference $taxCategory): void;

    public function setSearchKeywords(?SearchKeywords $searchKeywords): void;

    public function setState(?ImportReference $state): void;
}
