<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\CategoryKeyReferenceCollection;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ImportResourceBuilder;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringBuilder;
use Commercetools\Import\Models\Common\ProductTypeKeyReference;
use Commercetools\Import\Models\Common\ProductTypeKeyReferenceBuilder;
use Commercetools\Import\Models\Common\StateKeyReference;
use Commercetools\Import\Models\Common\StateKeyReferenceBuilder;
use Commercetools\Import\Models\Common\TaxCategoryKeyReference;
use Commercetools\Import\Models\Common\TaxCategoryKeyReferenceBuilder;
use Commercetools\Import\Models\Productvariants\AttributeCollection;
use stdClass;

/**
 * @implements Builder<ProductImport>
 */
final class ProductImportBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var null|ProductTypeKeyReference|ProductTypeKeyReferenceBuilder
     */
    private $productType;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $slug;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $description;

    /**

     * @var ?CategoryKeyReferenceCollection
     */
    private $categories;

    /**

     * @var ?AttributeCollection
     */
    private $attributes;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $metaTitle;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $metaDescription;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $metaKeywords;

    /**

     * @var null|TaxCategoryKeyReference|TaxCategoryKeyReferenceBuilder
     */
    private $taxCategory;

    /**

     * @var null|SearchKeywords|SearchKeywordsBuilder
     */
    private $searchKeywords;

    /**

     * @var null|StateKeyReference|StateKeyReferenceBuilder
     */
    private $state;

    /**

     * @var ?bool
     */
    private $publish;

    /**

     * @var ?string
     */
    private $priceMode;

    /**
     * <p>User-defined unique identifier. If a <a href="ctp:api:type:Product">Product</a> with this <code>key</code> exists, it will be updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Maps to <code>Product.name</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>The <code>productType</code> of a <a href="ctp:api:type:Product">Product</a>.
     * Maps to <code>Product.productType</code>.
     * The Reference to the <a href="ctp:api:type:ProductType">ProductType</a> with which the Product is associated.
     * If referenced ProductType does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary ProductType is created.</p>
     *

     * @return null|ProductTypeKeyReference
     */
    public function getProductType()
    {
        return $this->productType instanceof ProductTypeKeyReferenceBuilder ? $this->productType->build() : $this->productType;
    }

    /**
     * <p>Human-readable identifiers usually used as deep-link URL to the related product. Each slug must be unique across a Project,
     * but a product can have the same slug for different languages. Allowed are alphabetic, numeric, underscore (_) and hyphen (-) characters.</p>
     *

     * @return null|LocalizedString
     */
    public function getSlug()
    {
        return $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug;
    }

    /**
     * <p>Maps to <code>Product.description</code>.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * <p>Maps to <code>Product.categories</code>.
     * The References to the <a href="ctp:api:type:Category">Categories</a> with which the Product is associated.
     * If referenced Categories do not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary Categories are created.</p>
     *

     * @return null|CategoryKeyReferenceCollection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**

     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

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
    public function getMetaTitle()
    {
        return $this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle;
    }

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
    public function getMetaDescription()
    {
        return $this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription;
    }

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
    public function getMetaKeywords()
    {
        return $this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords;
    }

    /**
     * <p>The Reference to the <a href="/projects/taxCategories#taxcategory">TaxCategory</a> with which the Product is associated.
     * If referenced TaxCategory does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary TaxCategory is created.</p>
     *

     * @return null|TaxCategoryKeyReference
     */
    public function getTaxCategory()
    {
        return $this->taxCategory instanceof TaxCategoryKeyReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory;
    }

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
    public function getSearchKeywords()
    {
        return $this->searchKeywords instanceof SearchKeywordsBuilder ? $this->searchKeywords->build() : $this->searchKeywords;
    }

    /**
     * <p>The Reference to the <a href="/projects/states#state">State</a> with which the Product is associated.
     * If referenced State does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary State is created.</p>
     *

     * @return null|StateKeyReference
     */
    public function getState()
    {
        return $this->state instanceof StateKeyReferenceBuilder ? $this->state->build() : $this->state;
    }

    /**
     * <p>Determines the published status and current/staged projection of the Product. For more information, see <a href="/import-export/best-practices#manage-published-state-of-products">Managing the published state of Products</a>.</p>
     *

     * @return null|bool
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * <p>Determines the type of Prices the API uses. If not provided, the existing <code>Product.priceMode</code> is not changed.</p>
     *

     * @return null|string
     */
    public function getPriceMode()
    {
        return $this->priceMode;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?ProductTypeKeyReference $productType
     * @return $this
     */
    public function withProductType(?ProductTypeKeyReference $productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * @param ?LocalizedString $slug
     * @return $this
     */
    public function withSlug(?LocalizedString $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @param ?LocalizedString $description
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param ?CategoryKeyReferenceCollection $categories
     * @return $this
     */
    public function withCategories(?CategoryKeyReferenceCollection $categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * @param ?AttributeCollection $attributes
     * @return $this
     */
    public function withAttributes(?AttributeCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @param ?LocalizedString $metaTitle
     * @return $this
     */
    public function withMetaTitle(?LocalizedString $metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * @param ?LocalizedString $metaDescription
     * @return $this
     */
    public function withMetaDescription(?LocalizedString $metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * @param ?LocalizedString $metaKeywords
     * @return $this
     */
    public function withMetaKeywords(?LocalizedString $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * @param ?TaxCategoryKeyReference $taxCategory
     * @return $this
     */
    public function withTaxCategory(?TaxCategoryKeyReference $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @param ?SearchKeywords $searchKeywords
     * @return $this
     */
    public function withSearchKeywords(?SearchKeywords $searchKeywords)
    {
        $this->searchKeywords = $searchKeywords;

        return $this;
    }

    /**
     * @param ?StateKeyReference $state
     * @return $this
     */
    public function withState(?StateKeyReference $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?bool $publish
     * @return $this
     */
    public function withPublish(?bool $publish)
    {
        $this->publish = $publish;

        return $this;
    }

    /**
     * @param ?string $priceMode
     * @return $this
     */
    public function withPriceMode(?string $priceMode)
    {
        $this->priceMode = $priceMode;

        return $this;
    }

    /**
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @deprecated use withProductType() instead
     * @return $this
     */
    public function withProductTypeBuilder(?ProductTypeKeyReferenceBuilder $productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * @deprecated use withSlug() instead
     * @return $this
     */
    public function withSlugBuilder(?LocalizedStringBuilder $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @deprecated use withDescription() instead
     * @return $this
     */
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @deprecated use withMetaTitle() instead
     * @return $this
     */
    public function withMetaTitleBuilder(?LocalizedStringBuilder $metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * @deprecated use withMetaDescription() instead
     * @return $this
     */
    public function withMetaDescriptionBuilder(?LocalizedStringBuilder $metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * @deprecated use withMetaKeywords() instead
     * @return $this
     */
    public function withMetaKeywordsBuilder(?LocalizedStringBuilder $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * @deprecated use withTaxCategory() instead
     * @return $this
     */
    public function withTaxCategoryBuilder(?TaxCategoryKeyReferenceBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;

        return $this;
    }

    /**
     * @deprecated use withSearchKeywords() instead
     * @return $this
     */
    public function withSearchKeywordsBuilder(?SearchKeywordsBuilder $searchKeywords)
    {
        $this->searchKeywords = $searchKeywords;

        return $this;
    }

    /**
     * @deprecated use withState() instead
     * @return $this
     */
    public function withStateBuilder(?StateKeyReferenceBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    public function build(): ProductImport
    {
        return new ProductImportModel(
            $this->key,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->productType instanceof ProductTypeKeyReferenceBuilder ? $this->productType->build() : $this->productType,
            $this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug,
            $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description,
            $this->categories,
            $this->attributes,
            $this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle,
            $this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription,
            $this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords,
            $this->taxCategory instanceof TaxCategoryKeyReferenceBuilder ? $this->taxCategory->build() : $this->taxCategory,
            $this->searchKeywords instanceof SearchKeywordsBuilder ? $this->searchKeywords->build() : $this->searchKeywords,
            $this->state instanceof StateKeyReferenceBuilder ? $this->state->build() : $this->state,
            $this->publish,
            $this->priceMode
        );
    }

    public static function of(): ProductImportBuilder
    {
        return new self();
    }
}
