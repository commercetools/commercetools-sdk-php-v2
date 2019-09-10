<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Category\CategoryReferenceCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;

final class ProductDataModel extends JsonObjectModel implements ProductData
{
    
    public function __construct(
        LocalizedString $metaKeywords = null,
        CategoryOrderHints $categoryOrderHints = null,
        SearchKeywords $searchKeywords = null,
        LocalizedString $metaTitle = null,
        LocalizedString $name = null,
        LocalizedString $description = null,
        ProductVariantCollection $variants = null,
        ProductVariant $masterVariant = null,
        CategoryReferenceCollection $categories = null,
        LocalizedString $metaDescription = null,
        LocalizedString $slug = null
    ) {
        $this->metaKeywords = $metaKeywords;
        $this->categoryOrderHints = $categoryOrderHints;
        $this->searchKeywords = $searchKeywords;
        $this->metaTitle = $metaTitle;
        $this->name = $name;
        $this->description = $description;
        $this->variants = $variants;
        $this->masterVariant = $masterVariant;
        $this->categories = $categories;
        $this->metaDescription = $metaDescription;
        $this->slug = $slug;
        
    }

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
     * @var ?ProductVariantCollection
     */
    protected $variants;
    
    /**
     * @var ?ProductVariant
     */
    protected $masterVariant;
    
    /**
     * @var ?CategoryReferenceCollection
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
     *
     * @return LocalizedString|null
     */
    final public function getMetaKeywords()
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
     *
     * @return CategoryOrderHints|null
     */
    final public function getCategoryOrderHints()
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
     *
     * @return SearchKeywords|null
     */
    final public function getSearchKeywords()
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
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getMetaTitle()
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
     *
     * @return LocalizedString|null
     */
    final public function getName()
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
     *
     * @return LocalizedString|null
     */
    final public function getDescription()
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
     *
     * @return ProductVariantCollection|null
     */
    final public function getVariants()
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
     *
     * @return ProductVariant|null
     */
    final public function getMasterVariant()
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
     *
     * @return CategoryReferenceCollection|null
     */
    final public function getCategories()
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
     *
     * @return LocalizedString|null
     */
    final public function getMetaDescription()
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
     *
     * @return LocalizedString|null
     */
    final public function getSlug()
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
    final public function setMetaKeywords(?LocalizedString $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }
    
    final public function setCategoryOrderHints(?CategoryOrderHints $categoryOrderHints): void
    {
        $this->categoryOrderHints = $categoryOrderHints;
    }
    
    final public function setSearchKeywords(?SearchKeywords $searchKeywords): void
    {
        $this->searchKeywords = $searchKeywords;
    }
    
    final public function setMetaTitle(?LocalizedString $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }
    
    final public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
    
    final public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }
    
    final public function setVariants(?ProductVariantCollection $variants): void
    {
        $this->variants = $variants;
    }
    
    final public function setMasterVariant(?ProductVariant $masterVariant): void
    {
        $this->masterVariant = $masterVariant;
    }
    
    final public function setCategories(?CategoryReferenceCollection $categories): void
    {
        $this->categories = $categories;
    }
    
    final public function setMetaDescription(?LocalizedString $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }
    
    final public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }
    
}