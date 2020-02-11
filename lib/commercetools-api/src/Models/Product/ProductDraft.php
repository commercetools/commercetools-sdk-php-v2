<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Category\CategoryResourceIdentifierCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;

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

    /**
     * <p>A predefined product type assigned to the product.
     * All products must have a product type.</p>
     *
     * @return null|ProductTypeResourceIdentifier
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
     * Valid characters are: alphabetic characters (<code>A-Z, a-z</code>), numeric characters (<code>0-9</code>), underscores (<code>_</code>) and hyphens (<code>-</code>).</p>
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
     * @return null|CategoryResourceIdentifierCollection
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
     * <p>The master product variant.
     * Required if the <code>variants</code> array has product variants.</p>
     *
     * @return null|ProductVariantDraft
     */
    public function getMasterVariant();

    /**
     * <p>An array of related product variants.</p>
     *
     * @return null|ProductVariantDraftCollection
     */
    public function getVariants();

    /**
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    /**
     * @return null|SearchKeywords
     */
    public function getSearchKeywords();

    /**
     * @return null|StateResourceIdentifier
     */
    public function getState();

    /**
     * <p>If <code>true</code>, the product is published immediately.</p>
     *
     * @return null|bool
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
