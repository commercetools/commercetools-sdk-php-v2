<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;

/**
 * @implements Builder<CategoryDraft>
 */
final class CategoryDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?CategoryResourceIdentifierBuilder|CategoryResourceIdentifier
     */
    protected $parent;
    
    /**
     * @var ?AssetDraftCollection
     */
    protected $assets;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $metaKeywords;
    
    /**
     * @var ?string
     */
    protected $orderHint;
    
    /**
     * @var ?CustomFieldsDraftBuilder|CustomFieldsDraft
     */
    protected $custom;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $metaTitle;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $externalId;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $description;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $metaDescription;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $slug;

    /**
     *
     * @return CategoryResourceIdentifier|null
     */
    final public function getParent()
    {
       return ($this->parent instanceof CategoryResourceIdentifierBuilder ? $this->parent->build() : $this->parent);
    }
    
    /**
     *
     * @return AssetDraftCollection|null
     */
    final public function getAssets()
    {
       return $this->assets;
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
     * @return string|null
     */
    final public function getOrderHint()
    {
       return $this->orderHint;
    }
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       return ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom);
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
     * @return string|null
     */
    final public function getExternalId()
    {
       return $this->externalId;
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
     * @return LocalizedString|null
     */
    final public function getMetaDescription()
    {
       return ($this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription);
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
     * @return $this
     */
    final public function withParent(?CategoryResourceIdentifier $parent)
    {
        $this->parent = $parent;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAssets(?AssetDraftCollection $assets)
    {
        $this->assets = $assets;
        
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
    final public function withOrderHint(?string $orderHint)
    {
        $this->orderHint = $orderHint;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;
        
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
    final public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;
        
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
    final public function withMetaDescription(?LocalizedString $metaDescription)
    {
        $this->metaDescription = $metaDescription;
        
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
    final public function withParentBuilder(?CategoryResourceIdentifierBuilder $parent)
    {
        $this->parent = $parent;
        
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
    final public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;
        
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
    final public function withSlugBuilder(?LocalizedStringBuilder $slug)
    {
        $this->slug = $slug;
        
        return $this;
    }
    
    public function build(): CategoryDraft {
        return new CategoryDraftModel(
            ($this->parent instanceof CategoryResourceIdentifierBuilder ? $this->parent->build() : $this->parent),
            $this->assets,
            ($this->metaKeywords instanceof LocalizedStringBuilder ? $this->metaKeywords->build() : $this->metaKeywords),
            $this->orderHint,
            ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom),
            ($this->metaTitle instanceof LocalizedStringBuilder ? $this->metaTitle->build() : $this->metaTitle),
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            $this->externalId,
            ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description),
            ($this->metaDescription instanceof LocalizedStringBuilder ? $this->metaDescription->build() : $this->metaDescription),
            $this->key,
            ($this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug)
        );
    }
    
    public static function of(): CategoryDraftBuilder
    {
        return new self();
    }
}