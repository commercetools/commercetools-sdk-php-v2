<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\ProductType\ProductTypeReference;
use Commercetools\Api\Models\ProductType\ProductTypeReferenceBuilder;
use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\Product\ProductVariantBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<ShoppingListLineItem>
 */
final class ShoppingListLineItemBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?DateTimeImmutable
     */
    protected $addedAt;
    
    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?string
     */
    protected $productId;
    
    /**
     * @var ?CustomFieldsBuilder|CustomFields
     */
    protected $custom;
    
    /**
     * @var ?ProductVariantBuilder|ProductVariant
     */
    protected $variant;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $name;
    
    /**
     * @var ?int
     */
    protected $variantId;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $deactivatedAt;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $productSlug;
    
    /**
     * @var ?ProductTypeReferenceBuilder|ProductTypeReference
     */
    protected $productType;

    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getAddedAt()
    {
       return $this->addedAt;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       return $this->quantity;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getProductId()
    {
       return $this->productId;
    }
    
    /**
     *
     * @return CustomFields|null
     */
    final public function getCustom()
    {
       return ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom);
    }
    
    /**
     *
     * @return ProductVariant|null
     */
    final public function getVariant()
    {
       return ($this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant);
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
     * @return int|null
     */
    final public function getVariantId()
    {
       return $this->variantId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       return $this->id;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getDeactivatedAt()
    {
       return $this->deactivatedAt;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getProductSlug()
    {
       return ($this->productSlug instanceof LocalizedStringBuilder ? $this->productSlug->build() : $this->productSlug);
    }
    
    /**
     *
     * @return ProductTypeReference|null
     */
    final public function getProductType()
    {
       return ($this->productType instanceof ProductTypeReferenceBuilder ? $this->productType->build() : $this->productType);
    }
    /**
     * @return $this
     */
    final public function withAddedAt(?DateTimeImmutable $addedAt)
    {
        $this->addedAt = $addedAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withProductId(?string $productId)
    {
        $this->productId = $productId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVariant(?ProductVariant $variant)
    {
        $this->variant = $variant;
        
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
    final public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withId(?string $id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDeactivatedAt(?DateTimeImmutable $deactivatedAt)
    {
        $this->deactivatedAt = $deactivatedAt;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withProductSlug(?LocalizedString $productSlug)
    {
        $this->productSlug = $productSlug;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withProductType(?ProductTypeReference $productType)
    {
        $this->productType = $productType;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVariantBuilder(?ProductVariantBuilder $variant)
    {
        $this->variant = $variant;
        
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
    final public function withProductSlugBuilder(?LocalizedStringBuilder $productSlug)
    {
        $this->productSlug = $productSlug;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withProductTypeBuilder(?ProductTypeReferenceBuilder $productType)
    {
        $this->productType = $productType;
        
        return $this;
    }
    
    public function build(): ShoppingListLineItem {
        return new ShoppingListLineItemModel(
            $this->addedAt,
            $this->quantity,
            $this->productId,
            ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom),
            ($this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant),
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            $this->variantId,
            $this->id,
            $this->deactivatedAt,
            ($this->productSlug instanceof LocalizedStringBuilder ? $this->productSlug->build() : $this->productSlug),
            ($this->productType instanceof ProductTypeReferenceBuilder ? $this->productType->build() : $this->productType)
        );
    }
    
    public static function of(): ShoppingListLineItemBuilder
    {
        return new self();
    }
}