<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productdrafts;

use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\CategoryKeyReferenceCollection;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\ProductTypeKeyReference;
use Commercetools\Import\Models\Common\StateKeyReference;
use Commercetools\Import\Models\Common\TaxCategoryKeyReference;
use Commercetools\Import\Models\Products\SearchKeywords;

interface ProductDraftImport extends JsonObject
{
    const FIELD_PRODUCT_TYPE = 'productType';
    const FIELD_NAME = 'name';
    const FIELD_SLUG = 'slug';
    const FIELD_KEY = 'key';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_CATEGORIES = 'categories';
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
     * <p>A predefined product type assigned to the product.
     * All products must have a product type.</p>
     *
     * @return null|ProductTypeKeyReference
     */
    public function getProductType();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Human-readable identifiers usually used as deep-link URLs for the product.
     * A slug must be unique across a project, but a product can have the same slug for different languages.
     * Slugs have a maximum size of 256.
     * Valid characters are alphabetic characters (<code>A-Z, a-z</code>), numeric characters (<code>0-9</code>), underscores (<code>_</code>) and hyphens (<code>-</code>).</p>
     *
     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p>User-specific unique identifier for the product.</p>
     *
     * @return null|string
     */
    public function getKey();

    /**
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Categories assigned to the product.</p>
     *
     * @return null|CategoryKeyReferenceCollection
     */
    public function getCategories();

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
     * <p>The master product variant.
     * Required if the <code>variants</code> array has product variants.</p>
     *
     * @return null|ProductVariantDraftImport
     */
    public function getMasterVariant();

    /**
     * <p>An array of related product variants.</p>
     *
     * @return null|ProductVariantDraftImportCollection
     */
    public function getVariants();

    /**
     * @return null|TaxCategoryKeyReference
     */
    public function getTaxCategory();

    /**
     * @return null|SearchKeywords
     */
    public function getSearchKeywords();

    /**
     * @return null|StateKeyReference
     */
    public function getState();

    /**
     * <p>If <code>true</code>, the product is published immediately.</p>
     *
     * @return null|bool
     */
    public function getPublish();

    public function setProductType(?ProductTypeKeyReference $productType): void;

    public function setName(?LocalizedString $name): void;

    public function setSlug(?LocalizedString $slug): void;

    public function setKey(?string $key): void;

    public function setDescription(?LocalizedString $description): void;

    public function setCategories(?CategoryKeyReferenceCollection $categories): void;

    public function setMetaTitle(?LocalizedString $metaTitle): void;

    public function setMetaDescription(?LocalizedString $metaDescription): void;

    public function setMetaKeywords(?LocalizedString $metaKeywords): void;

    public function setMasterVariant(?ProductVariantDraftImport $masterVariant): void;

    public function setVariants(?ProductVariantDraftImportCollection $variants): void;

    public function setTaxCategory(?TaxCategoryKeyReference $taxCategory): void;

    public function setSearchKeywords(?SearchKeywords $searchKeywords): void;

    public function setState(?StateKeyReference $state): void;

    public function setPublish(?bool $publish): void;
}
