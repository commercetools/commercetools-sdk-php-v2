<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductData extends JsonObject {
    protected $name;
    protected $categories;
    protected $categoryOrderHints;
    protected $description;
    protected $slug;
    protected $metaTitle;
    protected $metaDescription;
    protected $metaKeywords;
    protected $masterVariant;
    protected $variants;
    protected $searchKeywords;

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
     * @return ProductVariant
     */
    public function getMasterVariant(): ProductVariant
    {
        if (is_null($this->masterVariant)) {
            $value = $this->raw('masterVariant');
            if (!is_null($value)) {
                $this->masterVariant = Mapper::map($value, ProductVariant::class);
            } else {
                return Mapper::map([], ProductVariant::class);
            }
        }
        return $this->masterVariant;
    }
                

    /**
     * @return ProductVariantCollection
     */
    public function getVariants(): ProductVariantCollection
    {
        if (is_null($this->variants)) {
            $value = $this->raw('variants');
            if (!is_null($value)) {
                $this->variants = Mapper::map($value, ProductVariantCollection::class);
            } else {
                return Mapper::map([], ProductVariantCollection::class);
            }
        }
        return $this->variants;
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
                
}
