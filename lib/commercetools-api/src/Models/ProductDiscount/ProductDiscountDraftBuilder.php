<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<ProductDiscountDraft>
 */
final class ProductDiscountDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $predicate;
    
    /**
     * @var ?string
     */
    protected $sortOrder;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $name;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $validUntil;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $description;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $validFrom;
    
    /**
     * @var ?bool
     */
    protected $isActive;
    
    /**
     * @var ?ProductDiscountValueBuilder|ProductDiscountValue
     */
    protected $value;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     *
     * @return string|null
     */
    final public function getPredicate()
    {
       return $this->predicate;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSortOrder()
    {
       return $this->sortOrder;
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
     * @return DateTimeImmutable|null
     */
    final public function getValidUntil()
    {
       return $this->validUntil;
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
     * @return DateTimeImmutable|null
     */
    final public function getValidFrom()
    {
       return $this->validFrom;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getIsActive()
    {
       return $this->isActive;
    }
    
    /**
     *
     * @return ProductDiscountValue|null
     */
    final public function getValue()
    {
       return ($this->value instanceof ProductDiscountValueBuilder ? $this->value->build() : $this->value);
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
     * @return $this
     */
    final public function withPredicate(?string $predicate)
    {
        $this->predicate = $predicate;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSortOrder(?string $sortOrder)
    {
        $this->sortOrder = $sortOrder;
        
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
    final public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;
        
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
    final public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withIsActive(?bool $isActive)
    {
        $this->isActive = $isActive;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withValue(?ProductDiscountValue $value)
    {
        $this->value = $value;
        
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
    final public function withValueBuilder(?ProductDiscountValueBuilder $value)
    {
        $this->value = $value;
        
        return $this;
    }
    
    public function build(): ProductDiscountDraft {
        return new ProductDiscountDraftModel(
            $this->predicate,
            $this->sortOrder,
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            $this->validUntil,
            ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description),
            $this->validFrom,
            $this->isActive,
            ($this->value instanceof ProductDiscountValueBuilder ? $this->value->build() : $this->value),
            $this->key
        );
    }
    
    public static function of(): ProductDiscountDraftBuilder
    {
        return new self();
    }
}