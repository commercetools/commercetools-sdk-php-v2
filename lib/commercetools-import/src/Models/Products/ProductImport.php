<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\CategoryKeyReferenceCollection;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\ProductTypeKeyReference;
use Commercetools\Import\Models\Common\StateKeyReference;
use Commercetools\Import\Models\Common\TaxCategoryKeyReference;

interface ProductImport extends ImportResource
{
    public const FIELD_NAME = 'name';
    public const FIELD_PRODUCT_TYPE = 'productType';
    public const FIELD_SLUG = 'slug';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_CATEGORIES = 'categories';
    public const FIELD_META_TITLE = 'metaTitle';
    public const FIELD_META_DESCRIPTION = 'metaDescription';
    public const FIELD_META_KEYWORDS = 'metaKeywords';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_SEARCH_KEYWORDS = 'searchKeywords';
    public const FIELD_STATE = 'state';
    public const FIELD_PUBLISH = 'publish';
    public const FIELD_PRICE_MODE = 'priceMode';

    /**
     * <p>User-defined unique identifier. If a <a href="ctp:api:type:Product">Product</a> with this <code>key</code> exists, it will be updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Maps to <code>Product.name</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>The <code>productType</code> of a <a href="ctp:api:type:Product">Product</a>.
     * Maps to <code>Product.productType</code>.
     * The Reference to the <a href="ctp:api:type:ProductType">ProductType</a> with which the Product is associated.
     * If referenced ProductType does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary ProductType is created.</p>
     *

     * @return null|ProductTypeKeyReference
     */
    public function getProductType();

    /**
     * <p>Human-readable identifiers usually used as deep-link URL to the related product. Each slug must be unique across a Project,
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
     * <p>Maps to <code>Product.categories</code>.
     * The References to the <a href="ctp:api:type:Category">Categories</a> with which the Product is associated.
     * If referenced Categories do not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary Categories are created.</p>
     *

     * @return null|CategoryKeyReferenceCollection
     */
    public function getCategories();

    /**
     * <p>A localized string is a JSON object where the keys are of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>, and the values the corresponding strings used for that language.</p>
     * <pre><code class="language-json">{
     *   &quot;de&quot;: &quot;Hundefutter&quot;,
     *   &quot;en&quot;: &quot;dog food&quot;
     * }
     * </code></pre>
     *

     * @return null|LocalizedString
     */
    public function getMetaTitle();

    /**
     * <p>A localized string is a JSON object where the keys are of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>, and the values the corresponding strings used for that language.</p>
     * <pre><code class="language-json">{
     *   &quot;de&quot;: &quot;Hundefutter&quot;,
     *   &quot;en&quot;: &quot;dog food&quot;
     * }
     * </code></pre>
     *

     * @return null|LocalizedString
     */
    public function getMetaDescription();

    /**
     * <p>A localized string is a JSON object where the keys are of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>, and the values the corresponding strings used for that language.</p>
     * <pre><code class="language-json">{
     *   &quot;de&quot;: &quot;Hundefutter&quot;,
     *   &quot;en&quot;: &quot;dog food&quot;
     * }
     * </code></pre>
     *

     * @return null|LocalizedString
     */
    public function getMetaKeywords();

    /**
     * <p>The Reference to the <a href="/projects/taxCategories#taxcategory">TaxCategory</a> with which the Product is associated.
     * If referenced TaxCategory does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary TaxCategory is created.</p>
     *

     * @return null|TaxCategoryKeyReference
     */
    public function getTaxCategory();

    /**
     * <p>Search keywords are primarily used by the suggester but are also considered for the full-text search. SearchKeywords is a JSON object where the keys are of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>. The value to a language tag key is an array of SearchKeyword for the specific language.</p>
     * <pre><code class="language-json">{
     *   &quot;en&quot;: [
     *     { &quot;text&quot;: &quot;Multi tool&quot; },
     *     { &quot;text&quot;: &quot;Swiss Army Knife&quot;, &quot;suggestTokenizer&quot;: { &quot;type&quot;: &quot;whitespace&quot; } }
     *   ],
     *   &quot;de&quot;: [
     *     {
     *       &quot;text&quot;: &quot;Schweizer Messer&quot;,
     *       &quot;suggestTokenizer&quot;: {
     *         &quot;type&quot;: &quot;custom&quot;,
     *         &quot;inputs&quot;: [&quot;schweizer messer&quot;, &quot;offiziersmesser&quot;, &quot;sackmesser&quot;]
     *       }
     *     }
     *   ]
     * }
     * </code></pre>
     *

     * @return null|SearchKeywords
     */
    public function getSearchKeywords();

    /**
     * <p>The Reference to the <a href="/projects/states#state">State</a> with which the Product is associated.
     * If referenced State does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary State is created.</p>
     *

     * @return null|StateKeyReference
     */
    public function getState();

    /**
     * <p>Determines the published status and current/staged projection of the Product. For more information, see <a href="/import-export/best-practices#managing-the-published-state-of-products">Managing the published state of Products</a>.</p>
     *

     * @return null|bool
     */
    public function getPublish();

    /**
     * <p>Determines the type of Prices the API uses. If not provided, the existing <code>Product.priceMode</code> is not changed.</p>
     *

     * @return null|string
     */
    public function getPriceMode();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?ProductTypeKeyReference $productType
     */
    public function setProductType(?ProductTypeKeyReference $productType): void;

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
