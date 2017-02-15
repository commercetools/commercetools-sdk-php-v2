<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductDraft extends JsonObject {
    protected $productType;
    protected $name;
    protected $slug;
    protected $key;
    protected $description;
    protected $categories;
    protected $categoryOrderHints;
    protected $metaTitle;
    protected $metaDescription;
    protected $metaKeywords;
    protected $masterVariant;
    protected $variants;
    protected $taxCategory;
    protected $searchKeywords;
    protected $state;
    protected $publish;

    /**
     * @return ProductTypeReference
     */
    public function getProductType(): ProductTypeReference
    {
        if (is_null($this->productType)) {
            $value = $this->raw('productType');
            if (!is_null($value)) {
                $this->productType = Mapper::map($value, ProductTypeReference::class);
            } else {
                return Mapper::map([], ProductTypeReference::class);
            }
        }
        return $this->productType;
    }
                

    /**
     * @return LocalizedString
     */
    public function getName(): LocalizedString
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->name;
    }
                

    /**
     * @return LocalizedString
     */
    public function getSlug(): LocalizedString
    {
        if (is_null($this->slug)) {
            $value = $this->raw('slug');
            if (!is_null($value)) {
                $this->slug = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->slug;
    }
                

    /**
     * @return string
     */
    public function getKey(): string
    {
        if (is_null($this->key)) {
            $value = $this->raw('key');
            if (!is_null($value)) {
                $this->key = (string)$value;
            } else {
                return '';
            }
        }
        return $this->key;
    }
                

    /**
     * @return LocalizedString
     */
    public function getDescription(): LocalizedString
    {
        if (is_null($this->description)) {
            $value = $this->raw('description');
            if (!is_null($value)) {
                $this->description = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->description;
    }
                

    /**
     * @return CategoryReferenceCollection
     */
    public function getCategories(): CategoryReferenceCollection
    {
        if (is_null($this->categories)) {
            $value = $this->raw('categories');
            if (!is_null($value)) {
                $this->categories = Mapper::map($value, CategoryReferenceCollection::class);
            } else {
                return Mapper::map([], CategoryReferenceCollection::class);
            }
        }
        return $this->categories;
    }
                

    /**
     * @return CategoryOrderHints
     */
    public function getCategoryOrderHints(): CategoryOrderHints
    {
        if (is_null($this->categoryOrderHints)) {
            $value = $this->raw('categoryOrderHints');
            if (!is_null($value)) {
                $this->categoryOrderHints = Mapper::map($value, CategoryOrderHints::class);
            } else {
                return Mapper::map([], CategoryOrderHints::class);
            }
        }
        return $this->categoryOrderHints;
    }
                

    /**
     * @return LocalizedString
     */
    public function getMetaTitle(): LocalizedString
    {
        if (is_null($this->metaTitle)) {
            $value = $this->raw('metaTitle');
            if (!is_null($value)) {
                $this->metaTitle = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->metaTitle;
    }
                

    /**
     * @return LocalizedString
     */
    public function getMetaDescription(): LocalizedString
    {
        if (is_null($this->metaDescription)) {
            $value = $this->raw('metaDescription');
            if (!is_null($value)) {
                $this->metaDescription = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->metaDescription;
    }
                

    /**
     * @return LocalizedString
     */
    public function getMetaKeywords(): LocalizedString
    {
        if (is_null($this->metaKeywords)) {
            $value = $this->raw('metaKeywords');
            if (!is_null($value)) {
                $this->metaKeywords = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->metaKeywords;
    }
                

    /**
     * @return ProductVariantDraft
     */
    public function getMasterVariant(): ProductVariantDraft
    {
        if (is_null($this->masterVariant)) {
            $value = $this->raw('masterVariant');
            if (!is_null($value)) {
                $this->masterVariant = Mapper::map($value, ProductVariantDraft::class);
            } else {
                return Mapper::map([], ProductVariantDraft::class);
            }
        }
        return $this->masterVariant;
    }
                

    /**
     * @return ProductVariantDraftCollection
     */
    public function getVariants(): ProductVariantDraftCollection
    {
        if (is_null($this->variants)) {
            $value = $this->raw('variants');
            if (!is_null($value)) {
                $this->variants = Mapper::map($value, ProductVariantDraftCollection::class);
            } else {
                return Mapper::map([], ProductVariantDraftCollection::class);
            }
        }
        return $this->variants;
    }
                

    /**
     * @return TaxCategoryReference
     */
    public function getTaxCategory(): TaxCategoryReference
    {
        if (is_null($this->taxCategory)) {
            $value = $this->raw('taxCategory');
            if (!is_null($value)) {
                $this->taxCategory = Mapper::map($value, TaxCategoryReference::class);
            } else {
                return Mapper::map([], TaxCategoryReference::class);
            }
        }
        return $this->taxCategory;
    }
                

    /**
     * @return SearchKeywords
     */
    public function getSearchKeywords(): SearchKeywords
    {
        if (is_null($this->searchKeywords)) {
            $value = $this->raw('searchKeywords');
            if (!is_null($value)) {
                $this->searchKeywords = Mapper::map($value, SearchKeywords::class);
            } else {
                return Mapper::map([], SearchKeywords::class);
            }
        }
        return $this->searchKeywords;
    }
                

    /**
     * @return StateReference
     */
    public function getState(): StateReference
    {
        if (is_null($this->state)) {
            $value = $this->raw('state');
            if (!is_null($value)) {
                $this->state = Mapper::map($value, StateReference::class);
            } else {
                return Mapper::map([], StateReference::class);
            }
        }
        return $this->state;
    }
                

    /**
     * @return bool
     */
    public function getPublish(): bool
    {
        if (is_null($this->publish)) {
            $value = $this->raw('publish');
            if (!is_null($value)) {
                $this->publish = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->publish;
    }
                
}
