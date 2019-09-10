<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Category\CategoryResourceIdentifierCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifier;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifierModel;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductDraftModel extends JsonObjectModel implements ProductDraft
{
    /**
     * @var ?SearchKeywords
     */
    protected $searchKeywords;

    /**
     * @var ?LocalizedString
     */
    protected $description;

    /**
     * @var ?ProductVariantDraftCollection
     */
    protected $variants;

    /**
     * @var ?LocalizedString
     */
    protected $metaDescription;

    /**
     * @var ?TaxCategoryResourceIdentifier
     */
    protected $taxCategory;

    /**
     * @var ?LocalizedString
     */
    protected $metaKeywords;

    /**
     * @var ?CategoryOrderHints
     */
    protected $categoryOrderHints;

    /**
     * @var ?bool
     */
    protected $publish;

    /**
     * @var ?LocalizedString
     */
    protected $metaTitle;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?StateResourceIdentifier
     */
    protected $state;

    /**
     * @var ?ProductVariantDraft
     */
    protected $masterVariant;

    /**
     * @var ?CategoryResourceIdentifierCollection
     */
    protected $categories;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?LocalizedString
     */
    protected $slug;

    /**
     * @var ?ProductTypeResourceIdentifier
     */
    protected $productType;

    public function __construct(
        SearchKeywords $searchKeywords = null,
        LocalizedString $description = null,
        ProductVariantDraftCollection $variants = null,
        LocalizedString $metaDescription = null,
        TaxCategoryResourceIdentifier $taxCategory = null,
        LocalizedString $metaKeywords = null,
        CategoryOrderHints $categoryOrderHints = null,
        bool $publish = null,
        LocalizedString $metaTitle = null,
        LocalizedString $name = null,
        StateResourceIdentifier $state = null,
        ProductVariantDraft $masterVariant = null,
        CategoryResourceIdentifierCollection $categories = null,
        string $key = null,
        LocalizedString $slug = null,
        ProductTypeResourceIdentifier $productType = null
    ) {
        $this->searchKeywords = $searchKeywords;
        $this->description = $description;
        $this->variants = $variants;
        $this->metaDescription = $metaDescription;
        $this->taxCategory = $taxCategory;
        $this->metaKeywords = $metaKeywords;
        $this->categoryOrderHints = $categoryOrderHints;
        $this->publish = $publish;
        $this->metaTitle = $metaTitle;
        $this->name = $name;
        $this->state = $state;
        $this->masterVariant = $masterVariant;
        $this->categories = $categories;
        $this->key = $key;
        $this->slug = $slug;
        $this->productType = $productType;
    }

    /**
     * @return null|SearchKeywords
     */
    public function getSearchKeywords()
    {
        if (is_null($this->searchKeywords)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraft::FIELD_SEARCH_KEYWORDS);
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
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraft::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * @return null|ProductVariantDraftCollection
     */
    public function getVariants()
    {
        if (is_null($this->variants)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductDraft::FIELD_VARIANTS);
            if (is_null($data)) {
                return null;
            }
            $this->variants = ProductVariantDraftCollection::fromArray($data);
        }

        return $this->variants;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaDescription()
    {
        if (is_null($this->metaDescription)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraft::FIELD_META_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->metaDescription = LocalizedStringModel::of($data);
        }

        return $this->metaDescription;
    }

    /**
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory()
    {
        if (is_null($this->taxCategory)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraft::FIELD_TAX_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->taxCategory = TaxCategoryResourceIdentifierModel::of($data);
        }

        return $this->taxCategory;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaKeywords()
    {
        if (is_null($this->metaKeywords)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraft::FIELD_META_KEYWORDS);
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
            $data = $this->raw(ProductDraft::FIELD_CATEGORY_ORDER_HINTS);
            if (is_null($data)) {
                return null;
            }

            $this->categoryOrderHints = CategoryOrderHintsModel::of($data);
        }

        return $this->categoryOrderHints;
    }

    /**
     * @return null|bool
     */
    public function getPublish()
    {
        if (is_null($this->publish)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(ProductDraft::FIELD_PUBLISH);
            if (is_null($data)) {
                return null;
            }
            $this->publish = (bool) $data;
        }

        return $this->publish;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaTitle()
    {
        if (is_null($this->metaTitle)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraft::FIELD_META_TITLE);
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
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraft::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * @return null|StateResourceIdentifier
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraft::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateResourceIdentifierModel::of($data);
        }

        return $this->state;
    }

    /**
     * @return null|ProductVariantDraft
     */
    public function getMasterVariant()
    {
        if (is_null($this->masterVariant)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraft::FIELD_MASTER_VARIANT);
            if (is_null($data)) {
                return null;
            }

            $this->masterVariant = ProductVariantDraftModel::of($data);
        }

        return $this->masterVariant;
    }

    /**
     * @return null|CategoryResourceIdentifierCollection
     */
    public function getCategories()
    {
        if (is_null($this->categories)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductDraft::FIELD_CATEGORIES);
            if (is_null($data)) {
                return null;
            }
            $this->categories = CategoryResourceIdentifierCollection::fromArray($data);
        }

        return $this->categories;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductDraft::FIELD_KEY);
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
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraft::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }

            $this->slug = LocalizedStringModel::of($data);
        }

        return $this->slug;
    }

    /**
     * @return null|ProductTypeResourceIdentifier
     */
    public function getProductType()
    {
        if (is_null($this->productType)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductDraft::FIELD_PRODUCT_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->productType = ProductTypeResourceIdentifierModel::of($data);
        }

        return $this->productType;
    }

    public function setSearchKeywords(?SearchKeywords $searchKeywords): void
    {
        $this->searchKeywords = $searchKeywords;
    }

    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    public function setVariants(?ProductVariantDraftCollection $variants): void
    {
        $this->variants = $variants;
    }

    public function setMetaDescription(?LocalizedString $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }

    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }

    public function setMetaKeywords(?LocalizedString $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }

    public function setCategoryOrderHints(?CategoryOrderHints $categoryOrderHints): void
    {
        $this->categoryOrderHints = $categoryOrderHints;
    }

    public function setPublish(?bool $publish): void
    {
        $this->publish = $publish;
    }

    public function setMetaTitle(?LocalizedString $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }

    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    public function setState(?StateResourceIdentifier $state): void
    {
        $this->state = $state;
    }

    public function setMasterVariant(?ProductVariantDraft $masterVariant): void
    {
        $this->masterVariant = $masterVariant;
    }

    public function setCategories(?CategoryResourceIdentifierCollection $categories): void
    {
        $this->categories = $categories;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }

    public function setProductType(?ProductTypeResourceIdentifier $productType): void
    {
        $this->productType = $productType;
    }
}
