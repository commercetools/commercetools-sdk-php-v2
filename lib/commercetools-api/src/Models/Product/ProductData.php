<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Category\CategoryReferenceCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductData extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_CATEGORIES = 'categories';
    public const FIELD_CATEGORY_ORDER_HINTS = 'categoryOrderHints';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_SLUG = 'slug';
    public const FIELD_META_TITLE = 'metaTitle';
    public const FIELD_META_DESCRIPTION = 'metaDescription';
    public const FIELD_META_KEYWORDS = 'metaKeywords';
    public const FIELD_MASTER_VARIANT = 'masterVariant';
    public const FIELD_VARIANTS = 'variants';
    public const FIELD_SEARCH_KEYWORDS = 'searchKeywords';

    /**
     * <p>Name of the Product.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p><a href="ctp:api:type:Category">Categories</a> assigned to the Product.</p>
     *

     * @return null|CategoryReferenceCollection
     */
    public function getCategories();

    /**
     * <p>Numerical values to allow ordering of Products within a specified Category.</p>
     *

     * @return null|CategoryOrderHints
     */
    public function getCategoryOrderHints();

    /**
     * <p>Description of the Product.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>User-defined identifier used in a deep-link URL for the Product.
     * Must be unique across a Project, but can be the same for Products in different <a href="ctp:api:type:Locale">Locales</a>.
     * Matches the pattern <code>[a-zA-Z0-9_-]{2,256}</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug();

    /**
     * <p>Title of the Product as displayed in search engine results.</p>
     *

     * @return null|LocalizedString
     */
    public function getMetaTitle();

    /**
     * <p>Description of the Product as displayed in search engine results below the meta title.</p>
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
     * <p>The Master Variant of the Product.</p>
     *

     * @return null|ProductVariant
     */
    public function getMasterVariant();

    /**
     * <p>Additional Product Variants.</p>
     *

     * @return null|ProductVariantCollection
     */
    public function getVariants();

    /**
     * <p>Used by <a href="/projects/products-suggestions">Product Suggestions</a>, but is also considered for a <a href="/projects/products-search#full-text-search">full text search</a>.</p>
     *

     * @return null|SearchKeywords
     */
    public function getSearchKeywords();

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?CategoryReferenceCollection $categories
     */
    public function setCategories(?CategoryReferenceCollection $categories): void;

    /**
     * @param ?CategoryOrderHints $categoryOrderHints
     */
    public function setCategoryOrderHints(?CategoryOrderHints $categoryOrderHints): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void;

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
     * @param ?ProductVariant $masterVariant
     */
    public function setMasterVariant(?ProductVariant $masterVariant): void;

    /**
     * @param ?ProductVariantCollection $variants
     */
    public function setVariants(?ProductVariantCollection $variants): void;

    /**
     * @param ?SearchKeywords $searchKeywords
     */
    public function setSearchKeywords(?SearchKeywords $searchKeywords): void;
}
