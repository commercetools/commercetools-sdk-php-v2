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
     * @var ?string
     */
    protected $key;

    /**
     * @var ?ProductTypeKeyReference
     */
    protected $productType;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?LocalizedString
     */
    protected $slug;

    /**
     * @var ?LocalizedString
     */
    protected $description;

    /**
     * @var ?CategoryKeyReferenceCollection
     */
    protected $categories;

    /**
     * @var ?LocalizedString
     */
    protected $metaTitle;

    /**
     * @var ?LocalizedString
     */
    protected $metaDescription;

    /**
     * @var ?LocalizedString
     */
    protected $metaKeywords;

    /**
     * @var ?ProductVariantDraftImport
     */
    protected $masterVariant;

    /**
     * @var ?ProductVariantDraftImportCollection
     */
    protected $variants;

    /**
     * @var ?TaxCategoryKeyReference
     */
    protected $taxCategory;

    /**
     * @var ?SearchKeywords
     */
    protected $searchKeywords;

    /**
     * @var ?StateKeyReference
     */
    protected $state;


    public function __construct(
        string $key = null,
        ProductTypeKeyReference $productType = null,
        LocalizedString $name = null,
        LocalizedString $slug = null,
        LocalizedString $description = null,
        CategoryKeyReferenceCollection $categories = null,
        LocalizedString $metaTitle = null,
        LocalizedString $metaDescription = null,
        LocalizedString $metaKeywords = null,
        ProductVariantDraftImport $masterVariant = null,
        ProductVariantDraftImportCollection $variants = null,
        TaxCategoryKeyReference $taxCategory = null,
        SearchKeywords $searchKeywords = null,
        StateKeyReference $state = null
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
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportResource::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>The product's product type. Maps to <code>Product.productType</code>.</p>
     * <p>The product type referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|ProductTypeKeyReference
     */
    public function getProductType()
    {
        if (is_null($this->productType)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraftImport::FIELD_PRODUCT_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->productType = ProductTypeKeyReferenceModel::of($data);
        }

        return $this->productType;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraftImport::FIELD_NAME);
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
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraftImport::FIELD_SLUG);
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
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraftImport::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * <p>An array of references to categories by their keys. Maps to <code>Product.categories</code>.</p>
     * <p>The categories referenced
     * must already exist in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|CategoryKeyReferenceCollection
     */
    public function getCategories()
    {
        if (is_null($this->categories)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductDraftImport::FIELD_CATEGORIES);
            if (is_null($data)) {
                return null;
            }
            $this->categories = CategoryKeyReferenceCollection::fromArray($data);
        }

        return $this->categories;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaTitle()
    {
        if (is_null($this->metaTitle)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraftImport::FIELD_META_TITLE);
            if (is_null($data)) {
                return null;
            }

            $this->metaTitle = LocalizedStringModel::of($data);
        }

        return $this->metaTitle;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaDescription()
    {
        if (is_null($this->metaDescription)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraftImport::FIELD_META_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->metaDescription = LocalizedStringModel::of($data);
        }

        return $this->metaDescription;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaKeywords()
    {
        if (is_null($this->metaKeywords)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraftImport::FIELD_META_KEYWORDS);
            if (is_null($data)) {
                return null;
            }

            $this->metaKeywords = LocalizedStringModel::of($data);
        }

        return $this->metaKeywords;
    }

    /**
     * <p>The master product variant.
     * Required if the <code>variants</code> array has product variants.</p>
     *
     * @return null|ProductVariantDraftImport
     */
    public function getMasterVariant()
    {
        if (is_null($this->masterVariant)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraftImport::FIELD_MASTER_VARIANT);
            if (is_null($data)) {
                return null;
            }

            $this->masterVariant = ProductVariantDraftImportModel::of($data);
        }

        return $this->masterVariant;
    }

    /**
     * <p>An array of related product variants.</p>
     *
     * @return null|ProductVariantDraftImportCollection
     */
    public function getVariants()
    {
        if (is_null($this->variants)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductDraftImport::FIELD_VARIANTS);
            if (is_null($data)) {
                return null;
            }
            $this->variants = ProductVariantDraftImportCollection::fromArray($data);
        }

        return $this->variants;
    }

    /**
     * <p>References a tax category by its key.</p>
     * <p>The tax category referenced must already exist
     * in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|TaxCategoryKeyReference
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraftImport::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = TaxCategoryKeyReferenceModel::of($data);
        }

        return $this->taxCategory;
    }

    /**
     * @return null|SearchKeywords
     */
    public function getSearchKeywords()
    {
        if (is_null($this->searchKeywords)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraftImport::FIELD_SEARCH_KEYWORDS);
            if (is_null($data)) {
                return null;
            }

            $this->searchKeywords = SearchKeywordsModel::of($data);
        }

        return $this->searchKeywords;
    }

    /**
     * <p>References a state by its key.</p>
     * <p>The tax category referenced must already exist
     * in the commercetools project, or the
     * import operation state is set to <code>Unresolved</code>.</p>
     *
     * @return null|StateKeyReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraftImport::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateKeyReferenceModel::of($data);
        }

        return $this->state;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setProductType(?ProductTypeKeyReference $productType): void
    {
        $this->productType = $productType;
    }

    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }

    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    public function setCategories(?CategoryKeyReferenceCollection $categories): void
    {
        $this->categories = $categories;
    }

    public function setMetaTitle(?LocalizedString $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }

    public function setMetaDescription(?LocalizedString $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }

    public function setMetaKeywords(?LocalizedString $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }

    public function setMasterVariant(?ProductVariantDraftImport $masterVariant): void
    {
        $this->masterVariant = $masterVariant;
    }

    public function setVariants(?ProductVariantDraftImportCollection $variants): void
    {
        $this->variants = $variants;
    }

    public function setTaxCategory(?TaxCategoryKeyReference $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }

    public function setSearchKeywords(?SearchKeywords $searchKeywords): void
    {
        $this->searchKeywords = $searchKeywords;
    }

    public function setState(?StateKeyReference $state): void
    {
        $this->state = $state;
    }
}
