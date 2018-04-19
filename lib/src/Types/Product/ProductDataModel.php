<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Category\CategoryReference;
use Commercetools\Types\Category\CategoryReferenceCollection;
use Commercetools\Types\Common\LocalizedString;

class ProductDataModel extends JsonObjectModel implements ProductData
{
    /**
     * @var LocalizedString
     */
    protected $name;
    /**
     * @var CategoryReferenceCollection
     */
    protected $categories;
    /**
     * @var CategoryOrderHints
     */
    protected $categoryOrderHints;
    /**
     * @var LocalizedString
     */
    protected $description;
    /**
     * @var LocalizedString
     */
    protected $slug;
    /**
     * @var LocalizedString
     */
    protected $metaTitle;
    /**
     * @var LocalizedString
     */
    protected $metaDescription;
    /**
     * @var LocalizedString
     */
    protected $metaKeywords;
    /**
     * @var ProductVariant
     */
    protected $masterVariant;
    /**
     * @var ProductVariantCollection
     */
    protected $variants;
    /**
     * @var SearchKeywords
     */
    protected $searchKeywords;

    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(ProductData::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return CategoryReferenceCollection
     */
    public function getCategories()
    {
        if (is_null($this->categories)) {
            $value = $this->raw(ProductData::FIELD_CATEGORIES);
            if (is_null($value)) {
                return $this->mapData(CategoryReferenceCollection::class, null);
            }
            $value = $this->mapData(CategoryReferenceCollection::class, $value);
            $this->categories = $value;
        }
        return $this->categories;
    }
    /**
     * @return CategoryOrderHints
     */
    public function getCategoryOrderHints()
    {
        if (is_null($this->categoryOrderHints)) {
            $value = $this->raw(ProductData::FIELD_CATEGORY_ORDER_HINTS);
            if (is_null($value)) {
                return $this->mapData(CategoryOrderHints::class, null);
            }
            $value = $this->mapData(CategoryOrderHints::class, $value);

            $this->categoryOrderHints = $value;
        }
        return $this->categoryOrderHints;
    }
    /**
     * @return LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            $value = $this->raw(ProductData::FIELD_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return LocalizedString
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            $value = $this->raw(ProductData::FIELD_SLUG);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->slug = $value;
        }
        return $this->slug;
    }
    /**
     * @return LocalizedString
     */
    public function getMetaTitle()
    {
        if (is_null($this->metaTitle)) {
            $value = $this->raw(ProductData::FIELD_META_TITLE);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->metaTitle = $value;
        }
        return $this->metaTitle;
    }
    /**
     * @return LocalizedString
     */
    public function getMetaDescription()
    {
        if (is_null($this->metaDescription)) {
            $value = $this->raw(ProductData::FIELD_META_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->metaDescription = $value;
        }
        return $this->metaDescription;
    }
    /**
     * @return LocalizedString
     */
    public function getMetaKeywords()
    {
        if (is_null($this->metaKeywords)) {
            $value = $this->raw(ProductData::FIELD_META_KEYWORDS);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->metaKeywords = $value;
        }
        return $this->metaKeywords;
    }
    /**
     * @return ProductVariant
     */
    public function getMasterVariant()
    {
        if (is_null($this->masterVariant)) {
            $value = $this->raw(ProductData::FIELD_MASTER_VARIANT);
            if (is_null($value)) {
                return $this->mapData(ProductVariant::class, null);
            }
            $value = $this->mapData(ProductVariant::class, $value);

            $this->masterVariant = $value;
        }
        return $this->masterVariant;
    }
    /**
     * @return ProductVariantCollection
     */
    public function getVariants()
    {
        if (is_null($this->variants)) {
            $value = $this->raw(ProductData::FIELD_VARIANTS);
            if (is_null($value)) {
                return $this->mapData(ProductVariantCollection::class, null);
            }
            $value = $this->mapData(ProductVariantCollection::class, $value);
            $this->variants = $value;
        }
        return $this->variants;
    }
    /**
     * @return SearchKeywords
     */
    public function getSearchKeywords()
    {
        if (is_null($this->searchKeywords)) {
            $value = $this->raw(ProductData::FIELD_SEARCH_KEYWORDS);
            if (is_null($value)) {
                return $this->mapData(SearchKeywords::class, null);
            }
            $value = $this->mapData(SearchKeywords::class, $value);

            $this->searchKeywords = $value;
        }
        return $this->searchKeywords;
    }

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * @param CategoryReferenceCollection $categories
     * @return $this
     */
    public function setCategories(CategoryReferenceCollection $categories)
    {
        $this->categories = $categories;

        return $this;
    }
    /**
     * @param CategoryOrderHints $categoryOrderHints
     * @return $this
     */
    public function setCategoryOrderHints(CategoryOrderHints $categoryOrderHints)
    {
        $this->categoryOrderHints = $categoryOrderHints;

        return $this;
    }
    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }
    /**
     * @param LocalizedString $slug
     * @return $this
     */
    public function setSlug(LocalizedString $slug)
    {
        $this->slug = $slug;

        return $this;
    }
    /**
     * @param LocalizedString $metaTitle
     * @return $this
     */
    public function setMetaTitle(LocalizedString $metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }
    /**
     * @param LocalizedString $metaDescription
     * @return $this
     */
    public function setMetaDescription(LocalizedString $metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }
    /**
     * @param LocalizedString $metaKeywords
     * @return $this
     */
    public function setMetaKeywords(LocalizedString $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }
    /**
     * @param ProductVariant $masterVariant
     * @return $this
     */
    public function setMasterVariant(ProductVariant $masterVariant)
    {
        $this->masterVariant = $masterVariant;

        return $this;
    }
    /**
     * @param ProductVariantCollection $variants
     * @return $this
     */
    public function setVariants(ProductVariantCollection $variants)
    {
        $this->variants = $variants;

        return $this;
    }
    /**
     * @param SearchKeywords $searchKeywords
     * @return $this
     */
    public function setSearchKeywords(SearchKeywords $searchKeywords)
    {
        $this->searchKeywords = $searchKeywords;

        return $this;
    }

}
