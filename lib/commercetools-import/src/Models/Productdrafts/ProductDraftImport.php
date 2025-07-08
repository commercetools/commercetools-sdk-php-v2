<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productdrafts;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\CategoryKeyReferenceCollection;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\ProductTypeKeyReference;
use Commercetools\Import\Models\Common\StateKeyReference;
use Commercetools\Import\Models\Common\TaxCategoryKeyReference;
use Commercetools\Import\Models\Products\SearchKeywords;
use Commercetools\Import\Models\Productvariants\AttributeCollection;

interface ProductDraftImport extends ImportResource
{
    public const FIELD_PRODUCT_TYPE = 'productType';
    public const FIELD_NAME = 'name';
    public const FIELD_SLUG = 'slug';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_CATEGORIES = 'categories';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_META_TITLE = 'metaTitle';
    public const FIELD_META_DESCRIPTION = 'metaDescription';
    public const FIELD_META_KEYWORDS = 'metaKeywords';
    public const FIELD_MASTER_VARIANT = 'masterVariant';
    public const FIELD_VARIANTS = 'variants';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_SEARCH_KEYWORDS = 'searchKeywords';
    public const FIELD_STATE = 'state';
    public const FIELD_PUBLISH = 'publish';
    public const FIELD_PRICE_MODE = 'priceMode';

    /**
     * <p>User-defined unique identifier. If a <a href="ctp:api:type:Product">Product</a> with this <code>key</code> exists, it is updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Maps to <code>Product.productType</code>. If the referenced <a href="ctp:api:type:ProductType">ProductType</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced ProductType is created.</p>
     *

     * @return null|ProductTypeKeyReference
     */
    public function getProductType();

    /**
     * <p>Maps to <code>ProductData.name</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Maps to <code>ProductData.slug</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p>Maps to <code>ProductData.description</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Maps to <code>ProductData.categories</code>. If the referenced <a href="ctp:api:type:Category">Categories</a> do not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced Categories are created.</p>
     *

     * @return null|CategoryKeyReferenceCollection
     */
    public function getCategories();

    /**

     * @return null|AttributeCollection
     */
    public function getAttributes();

    /**
     * <p>Maps to <code>ProductData.metaTitle</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaTitle();

    /**
     * <p>Maps to <code>ProductData.metaDescription</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaDescription();

    /**
     * <p>Maps to <code>ProductData.metaKeywords</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaKeywords();

    /**
     * <p>The master ProductVariant.
     * Required if <code>variants</code> contains at least one ProductVariant.</p>
     *

     * @return null|ProductVariantDraftImport
     */
    public function getMasterVariant();

    /**
     * <p>An array of related ProductVariants.</p>
     *

     * @return null|ProductVariantDraftImportCollection
     */
    public function getVariants();

    /**
     * <p>Maps to <code>Product.taxCategory</code>. If the referenced <a href="ctp:api:type:TaxCategory">TaxCategory</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced TaxCategory is created.</p>
     *

     * @return null|TaxCategoryKeyReference
     */
    public function getTaxCategory();

    /**
     * <p>Maps to <code>ProductData.searchKeywords</code>.</p>
     *

     * @return null|SearchKeywords
     */
    public function getSearchKeywords();

    /**
     * <p>Maps to <code>Product.state</code>. If the referenced <a href="ctp:api:type:State">State</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced State is created.</p>
     *

     * @return null|StateKeyReference
     */
    public function getState();

    /**
     * <p>Determines the published status and current/staged projection of the Product. For more information, see <a href="/import-export/best-practices#manage-published-state-of-products">Managing the published state of Products</a>.</p>
     *

     * @return null|bool
     */
    public function getPublish();

    /**
     * <p>Maps to <code>Product.priceMode</code>. If not provided, the existing <code>Product.priceMode</code> is not changed.</p>
     *

     * @return null|string
     */
    public function getPriceMode();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?ProductTypeKeyReference $productType
     */
    public function setProductType(?ProductTypeKeyReference $productType): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?CategoryKeyReferenceCollection $categories
     */
    public function setCategories(?CategoryKeyReferenceCollection $categories): void;

    /**
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void;

    /**
     * @param ?LocalizedString $metaTitle
     */
    public function setMetaTitle(?LocalizedString $metaTitle): void;

    /**
     * @param ?LocalizedString $metaDescription
     */
    public function setMetaDescription(?LocalizedString $metaDescription): void;

    /**
     * @param ?LocalizedString $metaKeywords
     */
    public function setMetaKeywords(?LocalizedString $metaKeywords): void;

    /**
     * @param ?ProductVariantDraftImport $masterVariant
     */
    public function setMasterVariant(?ProductVariantDraftImport $masterVariant): void;

    /**
     * @param ?ProductVariantDraftImportCollection $variants
     */
    public function setVariants(?ProductVariantDraftImportCollection $variants): void;

    /**
     * @param ?TaxCategoryKeyReference $taxCategory
     */
    public function setTaxCategory(?TaxCategoryKeyReference $taxCategory): void;

    /**
     * @param ?SearchKeywords $searchKeywords
     */
    public function setSearchKeywords(?SearchKeywords $searchKeywords): void;

    /**
     * @param ?StateKeyReference $state
     */
    public function setState(?StateKeyReference $state): void;

    /**
     * @param ?bool $publish
     */
    public function setPublish(?bool $publish): void;

    /**
     * @param ?string $priceMode
     */
    public function setPriceMode(?string $priceMode): void;
}
