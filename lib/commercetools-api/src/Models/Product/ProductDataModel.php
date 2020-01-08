<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Category\CategoryReferenceCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductDataModel extends JsonObjectModel implements ProductData
{
    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?CategoryReferenceCollection
     */
    protected $categories;

    /**
     * @var ?CategoryOrderHints
     */
    protected $categoryOrderHints;

    /**
     * @var ?LocalizedString
     */
    protected $description;

    /**
     * @var ?LocalizedString
     */
    protected $slug;

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
     * @var ?ProductVariant
     */
    protected $masterVariant;

    /**
     * @var ?ProductVariantCollection
     */
    protected $variants;

    /**
     * @var ?SearchKeywords
     */
    protected $searchKeywords;

    public function __construct(
        LocalizedString $name = null,
        CategoryReferenceCollection $categories = null,
        CategoryOrderHints $categoryOrderHints = null,
        LocalizedString $description = null,
        LocalizedString $slug = null,
        LocalizedString $metaTitle = null,
        LocalizedString $metaDescription = null,
        LocalizedString $metaKeywords = null,
        ProductVariant $masterVariant = null,
        ProductVariantCollection $variants = null,
        SearchKeywords $searchKeywords = null
    ) {
        $this->name = $name;
        $this->categories = $categories;
        $this->categoryOrderHints = $categoryOrderHints;
        $this->description = $description;
        $this->slug = $slug;
        $this->metaTitle = $metaTitle;
        $this->metaDescription = $metaDescription;
        $this->metaKeywords = $metaKeywords;
        $this->masterVariant = $masterVariant;
        $this->variants = $variants;
        $this->searchKeywords = $searchKeywords;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductData::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * @return null|CategoryReferenceCollection
     */
    public function getCategories()
    {
        if (is_null($this->categories)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductData::FIELD_CATEGORIES);
            if (is_null($data)) {
                return null;
            }
            $this->categories = CategoryReferenceCollection::fromArray($data);
        }

        return $this->categories;
    }

    /**
     * @return null|CategoryOrderHints
     */
    public function getCategoryOrderHints()
    {
        if (is_null($this->categoryOrderHints)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductData::FIELD_CATEGORY_ORDER_HINTS);
            if (is_null($data)) {
                return null;
            }

            $this->categoryOrderHints = CategoryOrderHintsModel::of($data);
        }

        return $this->categoryOrderHints;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductData::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductData::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }

            $this->slug = LocalizedStringModel::of($data);
        }

        return $this->slug;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaTitle()
    {
        if (is_null($this->metaTitle)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductData::FIELD_META_TITLE);
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
            $data = $this->raw(ProductData::FIELD_META_DESCRIPTION);
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
            $data = $this->raw(ProductData::FIELD_META_KEYWORDS);
            if (is_null($data)) {
                return null;
            }

            $this->metaKeywords = LocalizedStringModel::of($data);
        }

        return $this->metaKeywords;
    }

    /**
     * @return null|ProductVariant
     */
    public function getMasterVariant()
    {
        if (is_null($this->masterVariant)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductData::FIELD_MASTER_VARIANT);
            if (is_null($data)) {
                return null;
            }

            $this->masterVariant = ProductVariantModel::of($data);
        }

        return $this->masterVariant;
    }

    /**
     * @return null|ProductVariantCollection
     */
    public function getVariants()
    {
        if (is_null($this->variants)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ProductData::FIELD_VARIANTS);
            if (is_null($data)) {
                return null;
            }
            $this->variants = ProductVariantCollection::fromArray($data);
        }

        return $this->variants;
    }

    /**
     * @return null|SearchKeywords
     */
    public function getSearchKeywords()
    {
        if (is_null($this->searchKeywords)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProductData::FIELD_SEARCH_KEYWORDS);
            if (is_null($data)) {
                return null;
            }

            $this->searchKeywords = SearchKeywordsModel::of($data);
        }

        return $this->searchKeywords;
    }

    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    public function setCategories(?CategoryReferenceCollection $categories): void
    {
        $this->categories = $categories;
    }

    public function setCategoryOrderHints(?CategoryOrderHints $categoryOrderHints): void
    {
        $this->categoryOrderHints = $categoryOrderHints;
    }

    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
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

    public function setMasterVariant(?ProductVariant $masterVariant): void
    {
        $this->masterVariant = $masterVariant;
    }

    public function setVariants(?ProductVariantCollection $variants): void
    {
        $this->variants = $variants;
    }

    public function setSearchKeywords(?SearchKeywords $searchKeywords): void
    {
        $this->searchKeywords = $searchKeywords;
    }
}
