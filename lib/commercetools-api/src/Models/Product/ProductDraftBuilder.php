<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Category\CategoryResourceIdentifierCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifier;
use Commercetools\Api\Models\ProductType\ProductTypeResourceIdentifierBuilder;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifierBuilder;

/**
 * @implements Builder<ProductDraft>
 */
final class ProductDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?SearchKeywordsBuilder|SearchKeywords
     */
    protected $searchKeywords;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $description;
    
    /**
     * @var ?ProductVariantDraftCollection
     */
    protected $variants;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $metaDescription;
    
    /**
     * @var ?TaxCategoryResourceIdentifierBuilder|TaxCategoryResourceIdentifier
     */
    protected $taxCategory;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $metaKeywords;
    
    /**
     * @var ?CategoryOrderHintsBuilder|CategoryOrderHints
     */
    protected $categoryOrderHints;
    
    /**
     * @var ?bool
     */
    protected $publish;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $metaTitle;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $name;
    
    /**
     * @var ?StateResourceIdentifierBuilder|StateResourceIdentifier
     */
    protected $state;
    
    /**
     * @var ?ProductVariantDraftBuilder|ProductVariantDraft
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
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $slug;
    
    /**
     * @var ?ProductTypeResourceIdentifierBuilder|ProductTypeResourceIdentifier
     */
    protected $productType;

    /**
     *
     * @return SearchKeywords|null
     */
    final public function getSearchKeywords()
    {
       return ($this->searchKeywords instanceof SearchKeywordsBuilder ? $this->searchKeywords->build() : $this->searchKeywords);
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getDescription()
    {
       return ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description);
    }
    
    /**
     *
     * @return ProductVariantDraftCollection|null
     */
    final public function getVariants()
    {
       return $this->variants;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getMetaDescription()
    {
       return ($this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription);
    }
    
    /**
     *
     * @return TaxCategoryResourceIdentifier|null
     */
    final public function getTaxCategory()
    {
       return ($this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory);
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getMetaKeywords()
    {
       return ($this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords);
    }
    
    /**
     *
     * @return CategoryOrderHints|null
     */
    final public function getCategoryOrderHints()
    {
       return ($this->categoryOrderHints instanceof CategoryOrderHintsBuilder ? $this->categoryOrderHints->build() : $this->categoryOrderHints);
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getPublish()
    {
       return $this->publish;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getMetaTitle()
    {
       return ($this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle);
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getName()
    {
       return ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name);
    }
    
    /**
     *
     * @return StateResourceIdentifier|null
     */
    final public function getState()
    {
       return ($this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state);
    }
    
    /**
     *
     * @return ProductVariantDraft|null
     */
    final public function getMasterVariant()
    {
       return ($this->masterVariant instanceof ProductVariantDraftBuilder ? $this->masterVariant->build() : $this->masterVariant);
    }
    
    /**
     *
     * @return CategoryResourceIdentifierCollection|null
     */
    final public function getCategories()
    {
       return $this->categories;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       return $this->key;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getSlug()
    {
       return ($this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug);
    }
    
    /**
     *
     * @return ProductTypeResourceIdentifier|null
     */
    final public function getProductType()
    {
       return ($this->productType instanceof ProductTypeResourceIdentifierBuilder ? $this->productType->build() : $this->productType);
    }
    /**
     * @return $this
     */
    final public function withSearchKeywords(?SearchKeywords $searchKeywords)
    {
        $this->searchKeywords = $searchKeywords;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVariants(?ProductVariantDraftCollection $variants)
    {
        $this->variants = $variants;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMetaDescription(?LocalizedString $metaDescription)
    {
        $this->metaDescription = $metaDescription;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxCategory(?TaxCategoryResourceIdentifier $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMetaKeywords(?LocalizedString $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCategoryOrderHints(?CategoryOrderHints $categoryOrderHints)
    {
        $this->categoryOrderHints = $categoryOrderHints;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withPublish(?bool $publish)
    {
        $this->publish = $publish;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMetaTitle(?LocalizedString $metaTitle)
    {
        $this->metaTitle = $metaTitle;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withName(?LocalizedString $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withState(?StateResourceIdentifier $state)
    {
        $this->state = $state;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMasterVariant(?ProductVariantDraft $masterVariant)
    {
        $this->masterVariant = $masterVariant;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCategories(?CategoryResourceIdentifierCollection $categories)
    {
        $this->categories = $categories;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withKey(?string $key)
    {
        $this->key = $key;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSlug(?LocalizedString $slug)
    {
        $this->slug = $slug;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withProductType(?ProductTypeResourceIdentifier $productType)
    {
        $this->productType = $productType;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withSearchKeywordsBuilder(?SearchKeywordsBuilder $searchKeywords)
    {
        $this->searchKeywords = $searchKeywords;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMetaDescriptionBuilder(?LocalizedStringBuilder $metaDescription)
    {
        $this->metaDescription = $metaDescription;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTaxCategoryBuilder(?TaxCategoryResourceIdentifierBuilder $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMetaKeywordsBuilder(?LocalizedStringBuilder $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCategoryOrderHintsBuilder(?CategoryOrderHintsBuilder $categoryOrderHints)
    {
        $this->categoryOrderHints = $categoryOrderHints;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMetaTitleBuilder(?LocalizedStringBuilder $metaTitle)
    {
        $this->metaTitle = $metaTitle;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withStateBuilder(?StateResourceIdentifierBuilder $state)
    {
        $this->state = $state;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withMasterVariantBuilder(?ProductVariantDraftBuilder $masterVariant)
    {
        $this->masterVariant = $masterVariant;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSlugBuilder(?LocalizedStringBuilder $slug)
    {
        $this->slug = $slug;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withProductTypeBuilder(?ProductTypeResourceIdentifierBuilder $productType)
    {
        $this->productType = $productType;
        
        return $this;
    }
    
    public function build(): ProductDraft {
        return new ProductDraftModel(
            ($this->searchKeywords instanceof SearchKeywordsBuilder ? $this->searchKeywords->build() : $this->searchKeywords),
            ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description),
            $this->variants,
            ($this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription),
            ($this->taxCategory instanceof TaxCategoryResourceIdentifierBuilder ? $this->taxCategory->build() : $this->taxCategory),
            ($this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords),
            ($this->categoryOrderHints instanceof CategoryOrderHintsBuilder ? $this->categoryOrderHints->build() : $this->categoryOrderHints),
            $this->publish,
            ($this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle),
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            ($this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state),
            ($this->masterVariant instanceof ProductVariantDraftBuilder ? $this->masterVariant->build() : $this->masterVariant),
            $this->categories,
            $this->key,
            ($this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug),
            ($this->productType instanceof ProductTypeResourceIdentifierBuilder ? $this->productType->build() : $this->productType)
        );
    }
    
    public static function of(): ProductDraftBuilder
    {
        return new self();
    }
}