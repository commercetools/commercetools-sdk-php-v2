<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Category\CategoryResourceIdentifierCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductDraft extends JsonObject
{
    public const FIELD_PRODUCT_TYPE = 'productType';
    public const FIELD_NAME = 'name';
    public const FIELD_SLUG = 'slug';
    public const FIELD_KEY = 'key';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_CATEGORIES = 'categories';
    public const FIELD_CATEGORY_ORDER_HINTS = 'categoryOrderHints';
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
     * <p>The Product Type defining the Attributes for the Product. Cannot be changed later.</p>
     *

     * @return null|ProductTypeResourceIdentifier
     */
    public function getProductType();

    /**
     * <p>Name of the Product.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>User-defined identifier used in a deep-link URL for the Product.
     * It must be unique across a Project, but a Product can have the same slug in different <a href="ctp:api:type:Locale">Locales</a>.
     * It must match the pattern <code>[a-zA-Z0-9_-]{2,256}</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p>User-defined unique identifier for the Product.</p>
     * <p>This field is optional for backwards compatibility reasons, but we strongly recommend setting it. Keys are mandatory for importing Products with the <a href="/../import-export/">Import API</a> and the <a href="/../merchant-center/import-data">Merchant Center</a>.</p>
     * <p>To update a Product using the Import API or Merchant Center, the Product <code>key</code> must match the pattern <code>^[A-Za-z0-9_-]{2,256}$</code>.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Description of the Product.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Categories assigned to the Product.</p>
     *

     * @return null|CategoryResourceIdentifierCollection
     */
    public function getCategories();

    /**
     * <p>Numerical values to allow ordering of Products within a specified Category.</p>
     *

     * @return null|CategoryOrderHints
     */
    public function getCategoryOrderHints();

    /**
     * <p>Title of the Product as used by search engines.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaTitle();

    /**
     * <p>Description of the Product as used by search engines.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaDescription();

    /**
     * <p>Keywords that give additional information about the Product to search engines.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaKeywords();

    /**
     * <p>The Product Variant to be the Master Variant for the Product. Required if <code>variants</code> are provided also.</p>
     *

     * @return null|ProductVariantDraft
     */
    public function getMasterVariant();

    /**
     * <p>The additional Product Variants for the Product.</p>
     *

     * @return null|ProductVariantDraftCollection
     */
    public function getVariants();

    /**
     * <p>The Tax Category to be assigned to the Product.</p>
     *

     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    /**
     * <p>Used by <a href="/projects/products-suggestions">Product Suggestions</a>, but is also considered for a <a href="/projects/products-search#full-text-search">full text search</a>.</p>
     *

     * @return null|SearchKeywords
     */
    public function getSearchKeywords();

    /**
     * <p>State to be assigned to the Product.</p>
     *

     * @return null|StateResourceIdentifier
     */
    public function getState();

    /**
     * <p>If <code>true</code>, the Product is published immediately to the current projection.</p>
     *

     * @return null|bool
     */
    public function getPublish();

    /**
     * <p>Specifies the type of prices used when looking up a price for the Product.</p>
     *

     * @return null|string
     */
    public function getPriceMode();

    /**
     * @param ?ProductTypeResourceIdentifier $productType
     */
    public function setProductType(?ProductTypeResourceIdentifier $productType): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?CategoryResourceIdentifierCollection $categories
     */
    public function setCategories(?CategoryResourceIdentifierCollection $categories): void;

    /**
     * @param ?CategoryOrderHints $categoryOrderHints
     */
    public function setCategoryOrderHints(?CategoryOrderHints $categoryOrderHints): void;

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
     * @param ?ProductVariantDraft $masterVariant
     */
    public function setMasterVariant(?ProductVariantDraft $masterVariant): void;

    /**
     * @param ?ProductVariantDraftCollection $variants
     */
    public function setVariants(?ProductVariantDraftCollection $variants): void;

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     */
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;

    /**
     * @param ?SearchKeywords $searchKeywords
     */
    public function setSearchKeywords(?SearchKeywords $searchKeywords): void;

    /**
     * @param ?StateResourceIdentifier $state
     */
    public function setState(?StateResourceIdentifier $state): void;

    /**
     * @param ?bool $publish
     */
    public function setPublish(?bool $publish): void;

    /**
     * @param ?string $priceMode
     */
    public function setPriceMode(?string $priceMode): void;
}
