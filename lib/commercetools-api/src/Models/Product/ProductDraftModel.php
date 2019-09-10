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

use Commercetools\Api\Models\Category\CategoryResourceIdentifierCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifier;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifierModel;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierModel;

final class ProductDraftModel extends JsonObjectModel implements ProductDraft
{
    
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

    /**
     *
     * @return SearchKeywords|null
     */
    final public function getSearchKeywords()
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
     *
     * @return LocalizedString|null
     */
    final public function getDescription()
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
     *
     * @return ProductVariantDraftCollection|null
     */
    final public function getVariants()
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
     *
     * @return LocalizedString|null
     */
    final public function getMetaDescription()
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
     *
     * @return TaxCategoryResourceIdentifier|null
     */
    final public function getTaxCategory()
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
     *
     * @return LocalizedString|null
     */
    final public function getMetaKeywords()
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
     *
     * @return CategoryOrderHints|null
     */
    final public function getCategoryOrderHints()
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
     *
     * @return bool|null
     */
    final public function getPublish()
    {
       if (is_null($this->publish)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductDraft::FIELD_PUBLISH);
           if (is_null($data)) {
               return null;
           }
           $this->publish = (bool)$data;
       }
       return $this->publish;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getMetaTitle()
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
     *
     * @return LocalizedString|null
     */
    final public function getName()
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
     *
     * @return StateResourceIdentifier|null
     */
    final public function getState()
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
     *
     * @return ProductVariantDraft|null
     */
    final public function getMasterVariant()
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
     *
     * @return CategoryResourceIdentifierCollection|null
     */
    final public function getCategories()
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
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductDraft::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getSlug()
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
     *
     * @return ProductTypeResourceIdentifier|null
     */
    final public function getProductType()
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
    final public function setSearchKeywords(?SearchKeywords $searchKeywords): void
    {
        $this->searchKeywords = $searchKeywords;
    }
    
    final public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }
    
    final public function setVariants(?ProductVariantDraftCollection $variants): void
    {
        $this->variants = $variants;
    }
    
    final public function setMetaDescription(?LocalizedString $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }
    
    final public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }
    
    final public function setMetaKeywords(?LocalizedString $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }
    
    final public function setCategoryOrderHints(?CategoryOrderHints $categoryOrderHints): void
    {
        $this->categoryOrderHints = $categoryOrderHints;
    }
    
    final public function setPublish(?bool $publish): void
    {
        $this->publish = $publish;
    }
    
    final public function setMetaTitle(?LocalizedString $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }
    
    final public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
    
    final public function setState(?StateResourceIdentifier $state): void
    {
        $this->state = $state;
    }
    
    final public function setMasterVariant(?ProductVariantDraft $masterVariant): void
    {
        $this->masterVariant = $masterVariant;
    }
    
    final public function setCategories(?CategoryResourceIdentifierCollection $categories): void
    {
        $this->categories = $categories;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
    final public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }
    
    final public function setProductType(?ProductTypeResourceIdentifier $productType): void
    {
        $this->productType = $productType;
    }
    
}