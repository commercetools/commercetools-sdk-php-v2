<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\CartDiscount\CartDiscountResourceIdentifierCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<DiscountCodeDraft>
 */
final class DiscountCodeDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?CartDiscountResourceIdentifierCollection
     */
    protected $cartDiscounts;
    
    /**
     * @var ?string
     */
    protected $code;
    
    /**
     * @var ?string
     */
    protected $cartPredicate;
    
    /**
     * @var ?CustomFieldsDraftBuilder|CustomFieldsDraft
     */
    protected $custom;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $name;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $validUntil;
    
    /**
     * @var ?array
     */
    protected $groups;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $description;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $validFrom;
    
    /**
     * @var ?int
     */
    protected $maxApplicationsPerCustomer;
    
    /**
     * @var ?bool
     */
    protected $isActive;
    
    /**
     * @var ?int
     */
    protected $maxApplications;

    /**
     *
     * @return CartDiscountResourceIdentifierCollection|null
     */
    final public function getCartDiscounts()
    {
       return $this->cartDiscounts;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCode()
    {
       return $this->code;
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
     * @return array|null
     */
    final public function getGroups()
    {
       return $this->groups;
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
     * @return int|null
     */
    final public function getMaxApplicationsPerCustomer()
    {
       return $this->maxApplicationsPerCustomer;
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
     * @return int|null
     */
    final public function getMaxApplications()
    {
       return $this->maxApplications;
    }
    /**
     * @return $this
     */
    final public function withCartDiscounts(?CartDiscountResourceIdentifierCollection $cartDiscounts)
    {
        $this->cartDiscounts = $cartDiscounts;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCode(?string $code)
    {
        $this->code = $code;
        
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
    final public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;
        
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
    final public function withGroups(?array $groups)
    {
        $this->groups = $groups;
        
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
    final public function withMaxApplicationsPerCustomer(?int $maxApplicationsPerCustomer)
    {
        $this->maxApplicationsPerCustomer = $maxApplicationsPerCustomer;
        
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
    final public function withMaxApplications(?int $maxApplications)
    {
        $this->maxApplications = $maxApplications;
        
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
    
    public function build(): DiscountCodeDraft {
        return new DiscountCodeDraftModel(
            $this->cartDiscounts,
            $this->code,
            $this->cartPredicate,
            ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom),
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            $this->validUntil,
            $this->groups,
            ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description),
            $this->validFrom,
            $this->maxApplicationsPerCustomer,
            $this->isActive,
            $this->maxApplications
        );
    }
    
    public static function of(): DiscountCodeDraftBuilder
    {
        return new self();
    }
}