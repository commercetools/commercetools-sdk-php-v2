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
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;

/**
 * @implements Builder<ShoppingListDraft>
 */
final class ShoppingListDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?ShoppingListLineItemDraftCollection
     */
    protected $lineItems;
    
    /**
     * @var ?string
     */
    protected $anonymousId;
    
    /**
     * @var ?TextLineItemDraftCollection
     */
    protected $textLineItems;
    
    /**
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;
    
    /**
     * @var ?CustomFieldsDraftBuilder|CustomFieldsDraft
     */
    protected $custom;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $name;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $description;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $slug;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?CustomerResourceIdentifierBuilder|CustomerResourceIdentifier
     */
    protected $customer;

    /**
     *
     * @return ShoppingListLineItemDraftCollection|null
     */
    final public function getLineItems()
    {
       return $this->lineItems;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAnonymousId()
    {
       return $this->anonymousId;
    }
    
    /**
     *
     * @return TextLineItemDraftCollection|null
     */
    final public function getTextLineItems()
    {
       return $this->textLineItems;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getDeleteDaysAfterLastModification()
    {
       return $this->deleteDaysAfterLastModification;
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
    final public function getSlug()
    {
       return ($this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug);
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
     * @return CustomerResourceIdentifier|null
     */
    final public function getCustomer()
    {
       return ($this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer);
    }
    /**
     * @return $this
     */
    final public function withLineItems(?ShoppingListLineItemDraftCollection $lineItems)
    {
        $this->lineItems = $lineItems;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withAnonymousId(?string $anonymousId)
    {
        $this->anonymousId = $anonymousId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTextLineItems(?TextLineItemDraftCollection $textLineItems)
    {
        $this->textLineItems = $textLineItems;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification)
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
        
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
    final public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;
        
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
    final public function withKey(?string $key)
    {
        $this->key = $key;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withCustomer(?CustomerResourceIdentifier $customer)
    {
        $this->customer = $customer;
        
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
    final public function withCustomerBuilder(?CustomerResourceIdentifierBuilder $customer)
    {
        $this->customer = $customer;
        
        return $this;
    }
    
    public function build(): ShoppingListDraft {
        return new ShoppingListDraftModel(
            $this->lineItems,
            $this->anonymousId,
            $this->textLineItems,
            $this->deleteDaysAfterLastModification,
            ($this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom),
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description),
            ($this->slug instanceof LocalizedStringBuilder ? $this->slug->build() : $this->slug),
            $this->key,
            ($this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer)
        );
    }
    
    public static function of(): ShoppingListDraftBuilder
    {
        return new self();
    }
}