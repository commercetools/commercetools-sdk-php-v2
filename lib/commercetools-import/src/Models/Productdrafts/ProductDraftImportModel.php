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
use Commercetools\Import\Models\Productvariants\AttributeCollection;
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
     * @var ?AttributeCollection
     */
    protected $attributes;

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
        ?AttributeCollection $attributes = null,
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
        $this->attributes = $attributes;
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
     * <p>User-defined unique identifier. If a <a href="ctp:api:type:Product">Product</a> with this <code>key</code> exists, it is updated with the imported data.</p>
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
     * <p>Maps to <code>Product.productType</code>. If the referenced <a href="ctp:api:type:ProductType">ProductType</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced ProductType is created.</p>
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
     * <p>Maps to <code>ProductData.name</code>.</p>
     *
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
     * <p>Maps to <code>ProductData.slug</code>.</p>
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
     * <p>Maps to <code>ProductData.description</code>.</p>
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
     * <p>Maps to <code>ProductData.categories</code>. If the referenced <a href="ctp:api:type:Category">Categories</a> do not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced Categories are created.</p>
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
     *
     * @return null|AttributeCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = AttributeCollection::fromArray($data);
        }

        return $this->attributes;
    }

    /**
     * <p>Maps to <code>ProductData.metaTitle</code>.</p>
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
     * <p>Maps to <code>ProductData.metaDescription</code>.</p>
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
     * <p>Maps to <code>ProductData.metaKeywords</code>.</p>
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
     * <p>The master ProductVariant.
     * Required if <code>variants</code> contains at least one ProductVariant.</p>
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
     * <p>An array of related ProductVariants.</p>
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
     * <p>Maps to <code>Product.taxCategory</code>. If the referenced <a href="ctp:api:type:TaxCategory">TaxCategory</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced TaxCategory is created.</p>
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
     * <p>Maps to <code>ProductData.searchKeywords</code>.</p>
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
     * <p>Maps to <code>Product.state</code>. If the referenced <a href="ctp:api:type:State">State</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced State is created.</p>
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
     * <p>Determines the published status and current/staged projection of the Product. For more information, see <a href="/import-export/best-practices#manage-published-state-of-products">Managing the published state of Products</a>.</p>
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
     * <p>Maps to <code>Product.priceMode</code>. If not provided, the existing <code>Product.priceMode</code> is not changed.</p>
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
     * @param ?AttributeCollection $attributes
     */
    public function setAttributes(?AttributeCollection $attributes): void
    {
        $this->attributes = $attributes;
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
