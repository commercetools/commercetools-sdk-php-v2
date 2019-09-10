<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;

final class ShoppingListDraftModel extends JsonObjectModel implements ShoppingListDraft
{
    
    public function __construct(
        ShoppingListLineItemDraftCollection $lineItems = null,
        string $anonymousId = null,
        TextLineItemDraftCollection $textLineItems = null,
        int $deleteDaysAfterLastModification = null,
        CustomFieldsDraft $custom = null,
        LocalizedString $name = null,
        LocalizedString $description = null,
        LocalizedString $slug = null,
        string $key = null,
        CustomerResourceIdentifier $customer = null
    ) {
        $this->lineItems = $lineItems;
        $this->anonymousId = $anonymousId;
        $this->textLineItems = $textLineItems;
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
        $this->custom = $custom;
        $this->name = $name;
        $this->description = $description;
        $this->slug = $slug;
        $this->key = $key;
        $this->customer = $customer;
        
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
     * @var ?CustomFieldsDraft
     */
    protected $custom;
    
    /**
     * @var ?LocalizedString
     */
    protected $name;
    
    /**
     * @var ?LocalizedString
     */
    protected $description;
    
    /**
     * @var ?LocalizedString
     */
    protected $slug;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?CustomerResourceIdentifier
     */
    protected $customer;

    /**
     *
     * @return ShoppingListLineItemDraftCollection|null
     */
    final public function getLineItems()
    {
       if (is_null($this->lineItems)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ShoppingListDraft::FIELD_LINE_ITEMS);
           if (is_null($data)) {
               return null;
           }
           $this->lineItems = ShoppingListLineItemDraftCollection::fromArray($data);
       }
       return $this->lineItems;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAnonymousId()
    {
       if (is_null($this->anonymousId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShoppingListDraft::FIELD_ANONYMOUS_ID);
           if (is_null($data)) {
               return null;
           }
           $this->anonymousId = (string)$data;
       }
       return $this->anonymousId;
    }
    
    /**
     *
     * @return TextLineItemDraftCollection|null
     */
    final public function getTextLineItems()
    {
       if (is_null($this->textLineItems)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ShoppingListDraft::FIELD_TEXT_LINE_ITEMS);
           if (is_null($data)) {
               return null;
           }
           $this->textLineItems = TextLineItemDraftCollection::fromArray($data);
       }
       return $this->textLineItems;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getDeleteDaysAfterLastModification()
    {
       if (is_null($this->deleteDaysAfterLastModification)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ShoppingListDraft::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
           if (is_null($data)) {
               return null;
           }
           $this->deleteDaysAfterLastModification = (int)$data;
       }
       return $this->deleteDaysAfterLastModification;
    }
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShoppingListDraft::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsDraftModel::of($data);
       }
       return $this->custom;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShoppingListDraft::FIELD_NAME);
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
           $data = $this->raw(ShoppingListDraft::FIELD_DESCRIPTION);
           if (is_null($data)) {
               return null;
           }
           
           $this->description = LocalizedStringModel::of($data);
       }
       return $this->description;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getSlug()
    {
       if (is_null($this->slug)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShoppingListDraft::FIELD_SLUG);
           if (is_null($data)) {
               return null;
           }
           
           $this->slug = LocalizedStringModel::of($data);
       }
       return $this->slug;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShoppingListDraft::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    
    /**
     *
     * @return CustomerResourceIdentifier|null
     */
    final public function getCustomer()
    {
       if (is_null($this->customer)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShoppingListDraft::FIELD_CUSTOMER);
           if (is_null($data)) {
               return null;
           }
           
           $this->customer = CustomerResourceIdentifierModel::of($data);
       }
       return $this->customer;
    }
    final public function setLineItems(?ShoppingListLineItemDraftCollection $lineItems): void
    {
        $this->lineItems = $lineItems;
    }
    
    final public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }
    
    final public function setTextLineItems(?TextLineItemDraftCollection $textLineItems): void
    {
        $this->textLineItems = $textLineItems;
    }
    
    final public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }
    
    final public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
    
    final public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
    
    final public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }
    
    final public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
    final public function setCustomer(?CustomerResourceIdentifier $customer): void
    {
        $this->customer = $customer;
    }
    
}