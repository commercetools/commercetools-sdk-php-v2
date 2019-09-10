<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<CartDiscountDraft>
 */
final class CartDiscountDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?bool
     */
    protected $requiresDiscountCode;
    
    /**
     * @var ?string
     */
    protected $cartPredicate;
    
    /**
     * @var ?CustomFieldsBuilder|CustomFields
     */
    protected $custom;
    
    /**
     * @var ?string
     */
    protected $stackingMode;
    
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
     * @var ?CartDiscountValueBuilder|CartDiscountValue
     */
    protected $value;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?CartDiscountTargetBuilder|CartDiscountTarget
     */
    protected $target;

    /**
     *
     * @return bool|null
     */
    final public function getRequiresDiscountCode()
    {
       return $this->requiresDiscountCode;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCartPredicate()
    {
       return $this->cartPredicate;
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
     * <p>Specifies whether the application of this discount causes the following discounts to be ignored.
    * Defaults to Stacking.</p>
     * @return string|null
     */
    final public function getStackingMode()
    {
       return $this->stackingMode;
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
     * @return CartDiscountValue|null
     */
    final public function getValue()
    {
       return ($this->value instanceof CartDiscountValueBuilder ? $this->value->build() : $this->value);
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
     * @return CartDiscountTarget|null
     */
    final public function getTarget()
    {
       return ($this->target instanceof CartDiscountTargetBuilder ? $this->target->build() : $this->target);
    }
    /**
     * @return $this
     */
    final public function withRequiresDiscountCode(?bool $requiresDiscountCode)
    {
        $this->requiresDiscountCode = $requiresDiscountCode;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCartPredicate(?string $cartPredicate)
    {
        $this->cartPredicate = $cartPredicate;
        
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
    final public function withStackingMode(?string $stackingMode)
    {
        $this->stackingMode = $stackingMode;
        
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
    final public function withValue(?CartDiscountValue $value)
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
    final public function withTarget(?CartDiscountTarget $target)
    {
        $this->target = $target;
        
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
    final public function withValueBuilder(?CartDiscountValueBuilder $value)
    {
        $this->value = $value;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTargetBuilder(?CartDiscountTargetBuilder $target)
    {
        $this->target = $target;
        
        return $this;
    }
    
    public function build(): CartDiscountDraft {
        return new CartDiscountDraftModel(
            $this->requiresDiscountCode,
            $this->cartPredicate,
            ($this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom),
            $this->stackingMode,
            $this->sortOrder,
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            $this->validUntil,
            ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description),
            $this->validFrom,
            $this->isActive,
            ($this->value instanceof CartDiscountValueBuilder ? $this->value->build() : $this->value),
            $this->key,
            ($this->target instanceof CartDiscountTargetBuilder ? $this->target->build() : $this->target)
        );
    }
    
    public static function of(): CartDiscountDraftBuilder
    {
        return new self();
    }
}