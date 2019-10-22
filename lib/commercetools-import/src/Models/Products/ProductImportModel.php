<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Import\Models\Common\CategoryKeyReferenceCollection;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringModel;
use Commercetools\Import\Models\Common\ProductTypeKeyReference;
use Commercetools\Import\Models\Common\ProductTypeKeyReferenceModel;
use Commercetools\Import\Models\Common\StateKeyReference;
use Commercetools\Import\Models\Common\StateKeyReferenceModel;
use Commercetools\Import\Models\Common\TaxCategoryKeyReference;
use Commercetools\Import\Models\Common\TaxCategoryKeyReferenceModel;
use stdClass;

final class ProductImportModel extends JsonObjectModel implements ProductImport
{
    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?LocalizedString
     */
    protected $metaKeywords;

    /**
     * @var ?SearchKeywords
     */
    protected $searchKeywords;

    /**
     * @var ?LocalizedString
     */
    protected $metaTitle;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?LocalizedString
     */
    protected $description;

    /**
     * @var ?StateKeyReference
     */
    protected $state;

    /**
     * @var ?CategoryKeyReferenceCollection
     */
    protected $categories;

    /**
     * @var ?LocalizedString
     */
    protected $metaDescription;

    /**
     * @var ?LocalizedString
     */
    protected $slug;

    /**
     * @var ?ProductTypeKeyReference
     */
    protected $productType;

    /**
     * @var ?TaxCategoryKeyReference
     */
    protected $taxCategory;

    public function __construct(
        string $key = null,
        LocalizedString $metaKeywords = null,
        SearchKeywords $searchKeywords = null,
        LocalizedString $metaTitle = null,
        LocalizedString $name = null,
        LocalizedString $description = null,
        StateKeyReference $state = null,
        CategoryKeyReferenceCollection $categories = null,
        LocalizedString $metaDescription = null,
        LocalizedString $slug = null,
        ProductTypeKeyReference $productType = null,
        TaxCategoryKeyReference $taxCategory = null
    ) {
        $this->key = $key;
        $this->metaKeywords = $metaKeywords;
        $this->searchKeywords = $searchKeywords;
        $this->metaTitle = $metaTitle;
        $this->name = $name;
        $this->description = $description;
        $this->state = $state;
        $this->categories = $categories;
        $this->metaDescription = $metaDescription;
        $this->slug = $slug;
        $this->productType = $productType;
        $this->taxCategory = $taxCategory;
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
     * @return null|LocalizedString
     */
    public function getMetaKeywords()
    {
        if (is_null($this->metaKeywords)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductImport::FIELD_META_KEYWORDS);
            if (is_null($data)) {
                return null;
            }

            $this->metaKeywords = LocalizedStringModel::of($data);
        }

        return $this->metaKeywords;
    }

    /**
     * @return null|SearchKeywords
     */
    public function getSearchKeywords()
    {
        if (is_null($this->searchKeywords)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductImport::FIELD_SEARCH_KEYWORDS);
            if (is_null($data)) {
                return null;
            }

            $this->searchKeywords = SearchKeywordsModel::of($data);
        }

        return $this->searchKeywords;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaTitle()
    {
        if (is_null($this->metaTitle)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductImport::FIELD_META_TITLE);
            if (is_null($data)) {
                return null;
            }

            $this->metaTitle = LocalizedStringModel::of($data);
        }

        return $this->metaTitle;
    }

    /**
     * <p>Maps to <code>Product.name</code>.</p>.
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductImport::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * <p>Maps to <code>Product.description</code>.</p>.
     *
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductImport::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * <p>References a state by its key.</p>
     * <p>The tax category referenced must already exist
     * in the commercetools project, or the
     * import item state is set to <code>Unresolved</code>.</p>.
     *
     * @return null|StateKeyReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductImport::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateKeyReferenceModel::of($data);
        }

        return $this->state;
    }

    /**
     * <p>An array of references to a categories by their keys. Maps to <code>Product.categories</code>.</p>
     * <p>The categories referenced
     * must already exist in the commercetools project, or the
     * import item state is set to <code>Unresolved</code>.</p>.
     *
     * @return null|CategoryKeyReferenceCollection
     */
    public function getCategories()
    {
        if (is_null($this->categories)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductImport::FIELD_CATEGORIES);
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
    public function getMetaDescription()
    {
        if (is_null($this->metaDescription)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductImport::FIELD_META_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->metaDescription = LocalizedStringModel::of($data);
        }

        return $this->metaDescription;
    }

    /**
     * <p>Human-readable identifiers usually used as deep-link URL to the related product. Each slug must be unique across a project,
     * but a product can have the same slug for different languages. Allowed are alphabetic, numeric, underscore (_) and hyphen (-) characters.</p>.
     *
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductImport::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }

            $this->slug = LocalizedStringModel::of($data);
        }

        return $this->slug;
    }

    /**
     * <p>The product's product type. Maps to <code>Product.productType</code>.</p>
     * <p>The product type referenced
     * must already exist in the commercetools project, or the
     * import item state is set to <code>Unresolved</code>.</p>.
     *
     * @return null|ProductTypeKeyReference
     */
    public function getProductType()
    {
        if (is_null($this->productType)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductImport::FIELD_PRODUCT_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->productType = ProductTypeKeyReferenceModel::of($data);
        }

        return $this->productType;
    }

    /**
     * <p>References a tax category by its key.</p>
     * <p>The tax category referenced must already exist
     * in the commercetools project, or the
     * import item state is set to <code>Unresolved</code>.</p>.
     *
     * @return null|TaxCategoryKeyReference
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductImport::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = TaxCategoryKeyReferenceModel::of($data);
        }

        return $this->taxCategory;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setMetaKeywords(?LocalizedString $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }

    public function setSearchKeywords(?SearchKeywords $searchKeywords): void
    {
        $this->searchKeywords = $searchKeywords;
    }

    public function setMetaTitle(?LocalizedString $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }

    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    public function setState(?StateKeyReference $state): void
    {
        $this->state = $state;
    }

    public function setCategories(?CategoryKeyReferenceCollection $categories): void
    {
        $this->categories = $categories;
    }

    public function setMetaDescription(?LocalizedString $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }

    public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }

    public function setProductType(?ProductTypeKeyReference $productType): void
    {
        $this->productType = $productType;
    }

    public function setTaxCategory(?TaxCategoryKeyReference $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }
}
