<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Import\Models\Common\ImportReference;
use Commercetools\Import\Models\Common\ImportReferenceCollection;
use Commercetools\Import\Models\Common\ImportReferenceModel;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringModel;
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
     * @var ?CategoryOrderHints
     */
    protected $categoryOrderHints;

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
     * @var ?ImportReference
     */
    protected $state;

    /**
     * @var ?ImportReferenceCollection
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
     * @var ?ImportReference
     */
    protected $productType;

    /**
     * @var ?ImportReference
     */
    protected $taxCategory;

    public function __construct(
        string $key = null,
        LocalizedString $metaKeywords = null,
        CategoryOrderHints $categoryOrderHints = null,
        SearchKeywords $searchKeywords = null,
        LocalizedString $metaTitle = null,
        LocalizedString $name = null,
        LocalizedString $description = null,
        ImportReference $state = null,
        ImportReferenceCollection $categories = null,
        LocalizedString $metaDescription = null,
        LocalizedString $slug = null,
        ImportReference $productType = null,
        ImportReference $taxCategory = null
    ) {
        $this->key = $key;
        $this->metaKeywords = $metaKeywords;
        $this->categoryOrderHints = $categoryOrderHints;
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
     * @return null|CategoryOrderHints
     */
    public function getCategoryOrderHints()
    {
        if (is_null($this->categoryOrderHints)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductImport::FIELD_CATEGORY_ORDER_HINTS);
            if (is_null($data)) {
                return null;
            }

            $this->categoryOrderHints = CategoryOrderHintsModel::of($data);
        }

        return $this->categoryOrderHints;
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
     * <p>The human readable name of the product.</p>.
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
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductImport::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = ImportReferenceModel::of($data);
        }

        return $this->state;
    }

    /**
     * @return null|ImportReferenceCollection
     */
    public function getCategories()
    {
        if (is_null($this->categories)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductImport::FIELD_CATEGORIES);
            if (is_null($data)) {
                return null;
            }
            $this->categories = ImportReferenceCollection::fromArray($data);
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
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getProductType()
    {
        if (is_null($this->productType)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductImport::FIELD_PRODUCT_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->productType = ImportReferenceModel::of($data);
        }

        return $this->productType;
    }

    /**
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductImport::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = ImportReferenceModel::of($data);
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

    public function setCategoryOrderHints(?CategoryOrderHints $categoryOrderHints): void
    {
        $this->categoryOrderHints = $categoryOrderHints;
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

    public function setState(?ImportReference $state): void
    {
        $this->state = $state;
    }

    public function setCategories(?ImportReferenceCollection $categories): void
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

    public function setProductType(?ImportReference $productType): void
    {
        $this->productType = $productType;
    }

    public function setTaxCategory(?ImportReference $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }
}
