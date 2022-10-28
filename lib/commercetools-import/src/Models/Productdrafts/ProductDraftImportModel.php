<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productdrafts;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\CategoryKeyReferenceCollection;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\ImportResourceModel;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringModel;
use Commercetools\Import\Models\Common\ProductTypeKeyReference;
use Commercetools\Import\Models\Common\ProductTypeKeyReferenceModel;
use Commercetools\Import\Models\Common\StateKeyReference;
use Commercetools\Import\Models\Common\StateKeyReferenceModel;
use Commercetools\Import\Models\Common\TaxCategoryKeyReference;
use Commercetools\Import\Models\Common\TaxCategoryKeyReferenceModel;
use Commercetools\Import\Models\Products\SearchKeywords;
use Commercetools\Import\Models\Products\SearchKeywordsModel;
use stdClass;

/**
 * @internal
 */
final class ProductDraftImportModel extends JsonObjectModel implements ProductDraftImport
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?ProductTypeKeyReference
     */
    protected $productType;

    /**
     *
     * @var ?LocalizedString
     */
    protected $name;

    /**
     *
     * @var ?LocalizedString
     */
    protected $slug;

    /**
     *
     * @var ?LocalizedString
     */
    protected $description;

    /**
     *
     * @var ?CategoryKeyReferenceCollection
     */
    protected $categories;

    /**
     *
     * @var ?LocalizedString
     */
    protected $metaTitle;

    /**
     *
     * @var ?LocalizedString
     */
    protected $metaDescription;

    /**
     *
     * @var ?LocalizedString
     */
    protected $metaKeywords;

    /**
     *
     * @var ?ProductVariantDraftImport
     */
    protected $masterVariant;

    /**
     *
     * @var ?ProductVariantDraftImportCollection
     */
    protected $variants;

    /**
     *
     * @var ?TaxCategoryKeyReference
     */
    protected $taxCategory;

    /**
     *
     * @var ?SearchKeywords
     */
    protected $searchKeywords;

    /**
     *
     * @var ?StateKeyReference
     */
    protected $state;

    /**
     *
     * @var ?bool
     */
    protected $publish;

    /**
     *
     * @var ?string
     */
    protected $priceMode;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?ProductTypeKeyReference $productType = null,
        ?LocalizedString $name = null,
        ?LocalizedString $slug = null,
        ?LocalizedString $description = null,
        ?CategoryKeyReferenceCollection $categories = null,
        ?LocalizedString $metaTitle = null,
        ?LocalizedString $metaDescription = null,
        ?LocalizedString $metaKeywords = null,
        ?ProductVariantDraftImport $masterVariant = null,
        ?ProductVariantDraftImportCollection $variants = null,
        ?TaxCategoryKeyReference $taxCategory = null,
        ?SearchKeywords $searchKeywords = null,
        ?StateKeyReference $state = null,
        ?bool $publish = null,
        ?string $priceMode = null
    ) {
        $this->key = $key;
        $this->productType = $productType;
        $this->name = $name;
        $this->slug = $slug;
        $this->description = $description;
        $this->categories = $categories;
        $this->metaTitle = $metaTitle;
        $this->metaDescription = $metaDescription;
        $this->metaKeywords = $metaKeywords;
        $this->masterVariant = $masterVariant;
        $this->variants = $variants;
        $this->taxCategory = $taxCategory;
        $this->searchKeywords = $searchKeywords;
        $this->state = $state;
        $this->publish = $publish;
        $this->priceMode = $priceMode;
    }

    /**
     * <p>User-defined unique identifier.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>The <code>productType</code> of a <a href="/../api/projects/products#product">Product</a>.
     * Maps to <code>Product.productType</code>.
     * The Reference to the <a href="/../api/projects/productTypes#producttype">ProductType</a> with which the ProductDraft is associated.
     * If referenced ProductType does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary ProductType is created.</p>
     *
     *
     * @return null|ProductTypeKeyReference
     */
    public function getProductType()
    {
        if (is_null($this->productType)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->productType = ProductTypeKeyReferenceModel::of($data);
        }

        return $this->productType;
    }

    /**
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * <p>Human-readable identifiers usually used as deep-link URL to the related product. Each slug must be unique across a project,
     * but a product can have the same slug for different languages. Allowed are alphabetic, numeric, underscore (_) and hyphen (-) characters.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }

            $this->slug = LocalizedStringModel::of($data);
        }

        return $this->slug;
    }

    /**
     * <p>Maps to <code>Product.description</code>.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * <p>The Reference to the <a href="/../api/projects/categories#category">Categories</a> with which the ProductDraft is associated.
     * If referenced Categories do not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary Categories are created.</p>
     *
     *
     * @return null|CategoryKeyReferenceCollection
     */
    public function getCategories()
    {
        if (is_null($this->categories)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_CATEGORIES);
            if (is_null($data)) {
                return null;
            }
            $this->categories = CategoryKeyReferenceCollection::fromArray($data);
        }

        return $this->categories;
    }

    /**
     * <p>A localized string is a JSON object where the keys are of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>, and the values the corresponding strings used for that language.</p>
     * <pre><code class="language-json">{
     *   &quot;de&quot;: &quot;Hundefutter&quot;,
     *   &quot;en&quot;: &quot;dog food&quot;
     * }
     * </code></pre>
     *
     *
     * @return null|LocalizedString
     */
    public function getMetaTitle()
    {
        if (is_null($this->metaTitle)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_META_TITLE);
            if (is_null($data)) {
                return null;
            }

            $this->metaTitle = LocalizedStringModel::of($data);
        }

        return $this->metaTitle;
    }

    /**
     * <p>A localized string is a JSON object where the keys are of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>, and the values the corresponding strings used for that language.</p>
     * <pre><code class="language-json">{
     *   &quot;de&quot;: &quot;Hundefutter&quot;,
     *   &quot;en&quot;: &quot;dog food&quot;
     * }
     * </code></pre>
     *
     *
     * @return null|LocalizedString
     */
    public function getMetaDescription()
    {
        if (is_null($this->metaDescription)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_META_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->metaDescription = LocalizedStringModel::of($data);
        }

        return $this->metaDescription;
    }

    /**
     * <p>A localized string is a JSON object where the keys are of <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag</a>, and the values the corresponding strings used for that language.</p>
     * <pre><code class="language-json">{
     *   &quot;de&quot;: &quot;Hundefutter&quot;,
     *   &quot;en&quot;: &quot;dog food&quot;
     * }
     * </code></pre>
     *
     *
     * @return null|LocalizedString
     */
    public function getMetaKeywords()
    {
        if (is_null($this->metaKeywords)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_META_KEYWORDS);
            if (is_null($data)) {
                return null;
            }

            $this->metaKeywords = LocalizedStringModel::of($data);
        }

        return $this->metaKeywords;
    }

    /**
     * <p>The master Product variant.
     * Required if the <code>variants</code> array contains a Product Variant.</p>
     *
     *
     * @return null|ProductVariantDraftImport
     */
    public function getMasterVariant()
    {
        if (is_null($this->masterVariant)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_MASTER_VARIANT);
            if (is_null($data)) {
                return null;
            }

            $this->masterVariant = ProductVariantDraftImportModel::of($data);
        }

        return $this->masterVariant;
    }

    /**
     * <p>An array of related Product Variants.</p>
     *
     *
     * @return null|ProductVariantDraftImportCollection
     */
    public function getVariants()
    {
        if (is_null($this->variants)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_VARIANTS);
            if (is_null($data)) {
                return null;
            }
            $this->variants = ProductVariantDraftImportCollection::fromArray($data);
        }

        return $this->variants;
    }

    /**
     * <p>The Reference to the <a href="/../api/projects/taxCategories#taxcategory">TaxCategory</a> with which the ProductDraft is associated.
     * If referenced TaxCategory does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary TaxCategory is created.</p>
     *
     *
     * @return null|TaxCategoryKeyReference
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = TaxCategoryKeyReferenceModel::of($data);
        }

        return $this->taxCategory;
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
     *
     * @return null|SearchKeywords
     */
    public function getSearchKeywords()
    {
        if (is_null($this->searchKeywords)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SEARCH_KEYWORDS);
            if (is_null($data)) {
                return null;
            }

            $this->searchKeywords = SearchKeywordsModel::of($data);
        }

        return $this->searchKeywords;
    }

    /**
     * <p>The Reference to the <a href="/../api/projects/states#state">State</a> with which the ProductDraft is associated.
     * If referenced State does not exist, the <code>state</code> of the <a href="/import-operation#importoperation">ImportOperation</a> will be set to <code>unresolved</code> until the necessary State is created.</p>
     *
     *
     * @return null|StateKeyReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateKeyReferenceModel::of($data);
        }

        return $this->state;
    }

    /**
     * <p>If <code>publish</code> is set to either <code>true</code> or <code>false</code>, both staged and current projections are set to the same value provided by the import data.
     * If <code>publish</code> is not set, the staged projection is set to the provided import data, but the current projection stays unchanged.
     * However, if the import data contains no update, that is, if it matches the staged projection of the existing Product, the import induces no change in the existing Product whether <code>publish</code> is set or not.</p>
     *
     *
     * @return null|bool
     */
    public function getPublish()
    {
        if (is_null($this->publish)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_PUBLISH);
            if (is_null($data)) {
                return null;
            }
            $this->publish = (bool) $data;
        }

        return $this->publish;
    }

    /**
     * <p>Determines the type of Prices the API uses. See <a href="/../api/projects/products#productpricemode">ProductPriceMode</a> for more details. If not provided, the existing <code>Product.priceMode</code> is not changed.</p>
     *
     *
     * @return null|string
     */
    public function getPriceMode()
    {
        if (is_null($this->priceMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PRICE_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->priceMode = (string) $data;
        }

        return $this->priceMode;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?ProductTypeKeyReference $productType
     */
    public function setProductType(?ProductTypeKeyReference $productType): void
    {
        $this->productType = $productType;
    }

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?CategoryKeyReferenceCollection $categories
     */
    public function setCategories(?CategoryKeyReferenceCollection $categories): void
    {
        $this->categories = $categories;
    }

    /**
     * @param ?LocalizedString $metaTitle
     */
    public function setMetaTitle(?LocalizedString $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }

    /**
     * @param ?LocalizedString $metaDescription
     */
    public function setMetaDescription(?LocalizedString $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }

    /**
     * @param ?LocalizedString $metaKeywords
     */
    public function setMetaKeywords(?LocalizedString $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }

    /**
     * @param ?ProductVariantDraftImport $masterVariant
     */
    public function setMasterVariant(?ProductVariantDraftImport $masterVariant): void
    {
        $this->masterVariant = $masterVariant;
    }

    /**
     * @param ?ProductVariantDraftImportCollection $variants
     */
    public function setVariants(?ProductVariantDraftImportCollection $variants): void
    {
        $this->variants = $variants;
    }

    /**
     * @param ?TaxCategoryKeyReference $taxCategory
     */
    public function setTaxCategory(?TaxCategoryKeyReference $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }

    /**
     * @param ?SearchKeywords $searchKeywords
     */
    public function setSearchKeywords(?SearchKeywords $searchKeywords): void
    {
        $this->searchKeywords = $searchKeywords;
    }

    /**
     * @param ?StateKeyReference $state
     */
    public function setState(?StateKeyReference $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?bool $publish
     */
    public function setPublish(?bool $publish): void
    {
        $this->publish = $publish;
    }

    /**
     * @param ?string $priceMode
     */
    public function setPriceMode(?string $priceMode): void
    {
        $this->priceMode = $priceMode;
    }
}
