<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Productdrafts;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use Models\Common\CategoryKeyReferenceCollection;
use Models\Common\ImportResource;
use Models\Common\LocalizedString;
use Models\Common\ProductTypeKeyReference;
use Models\Common\StateKeyReference;
use Models\Common\TaxCategoryKeyReference;
use Models\Products\SearchKeywords;

interface ProductDraftImport extends ImportResource
{

    public const FIELD_PRODUCT_TYPE = 'productType';
    public const FIELD_NAME = 'name';
    public const FIELD_SLUG = 'slug';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_CATEGORIES = 'categories';
    public const FIELD_META_TITLE = 'metaTitle';
    public const FIELD_META_DESCRIPTION = 'metaDescription';
    public const FIELD_META_KEYWORDS = 'metaKeywords';
    public const FIELD_MASTER_VARIANT = 'masterVariant';
    public const FIELD_VARIANTS = 'variants';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_SEARCH_KEYWORDS = 'searchKeywords';
    public const FIELD_STATE = 'state';

    /**
     * <p>The product's product type. Maps to <code>Product.productType</code>.</p>
     * <p>The product type referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|ProductTypeKeyReference
     */
    public function getProductType();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Human-readable identifiers usually used as deep-link URL to the related product. Each slug must be unique across a project,
     * but a product can have the same slug for different languages. Allowed are alphabetic, numeric, underscore (_) and hyphen (-) characters.</p>
     *
     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p>Maps to <code>Product.description</code>.</p>
     *
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>An array of references to categories by their keys. Maps to <code>Product.categories</code>.</p>
     * <p>The categories referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
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
     * <p>References a tax category by its key.</p>
     * <p>The tax category referenced must already exist
     * in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|TaxCategoryKeyReference
     */
    public function getTaxCategory();

    /**
     * @return null|SearchKeywords
     */
    public function getSearchKeywords();

    /**
     * <p>References a state by its key.</p>
     * <p>The tax category referenced must already exist
     * in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|StateKeyReference
     */
    public function getState();

    public function setProductType(?ProductTypeKeyReference $productType): void;

    public function setName(?LocalizedString $name): void;

    public function setSlug(?LocalizedString $slug): void;

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
}
