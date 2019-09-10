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

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\LoggedResourceModel;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class ShoppingListModel extends JsonObjectModel implements ShoppingList
{
    
    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $id = null,
        int $version = null,
        CreatedBy $createdBy = null,
        LastModifiedBy $lastModifiedBy = null,
        ShoppingListLineItemCollection $lineItems = null,
        string $anonymousId = null,
        TextLineItemCollection $textLineItems = null,
        int $deleteDaysAfterLastModification = null,
        CustomFields $custom = null,
        LocalizedString $name = null,
        LocalizedString $description = null,
        LocalizedString $slug = null,
        string $key = null,
        CustomerReference $customer = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->id = $id;
        $this->version = $version;
        $this->createdBy = $createdBy;
        $this->lastModifiedBy = $lastModifiedBy;
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
     * @var ?DateTimeImmutable
     */
    protected $createdAt;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;
    
    /**
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?int
     */
    protected $version;
    
    /**
     * @var ?CreatedBy
     */
    protected $createdBy;
    
    /**
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;
    
    /**
     * @var ?ShoppingListLineItemCollection
     */
    protected $lineItems;
    
    /**
     * @var ?string
     */
    protected $anonymousId;
    
    /**
     * @var ?TextLineItemCollection
     */
    protected $textLineItems;
    
    /**
     * @var ?int
     */
    protected $deleteDaysAfterLastModification;
    
    /**
     * @var ?CustomFields
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
     * @var ?CustomerReference
     */
    protected $customer;

    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getCreatedAt()
    {
       if (is_null($this->createdAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(BaseResource::FIELD_CREATED_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->createdAt = $data;
       }
       return $this->createdAt;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getLastModifiedAt()
    {
       if (is_null($this->lastModifiedAt)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(BaseResource::FIELD_LAST_MODIFIED_AT);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->lastModifiedAt = $data;
       }
       return $this->lastModifiedAt;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(BaseResource::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (string)$data;
       }
       return $this->id;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVersion()
    {
       if (is_null($this->version)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(BaseResource::FIELD_VERSION);
           if (is_null($data)) {
               return null;
           }
           $this->version = (int)$data;
       }
       return $this->version;
    }
    
    /**
     *
     * @return CreatedBy|null
     */
    final public function getCreatedBy()
    {
       if (is_null($this->createdBy)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LoggedResource::FIELD_CREATED_BY);
           if (is_null($data)) {
               return null;
           }
           
           $this->createdBy = CreatedByModel::of($data);
       }
       return $this->createdBy;
    }
    
    /**
     *
     * @return LastModifiedBy|null
     */
    final public function getLastModifiedBy()
    {
       if (is_null($this->lastModifiedBy)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LoggedResource::FIELD_LAST_MODIFIED_BY);
           if (is_null($data)) {
               return null;
           }
           
           $this->lastModifiedBy = LastModifiedByModel::of($data);
       }
       return $this->lastModifiedBy;
    }
    
    /**
     *
     * @return ShoppingListLineItemCollection|null
     */
    final public function getLineItems()
    {
       if (is_null($this->lineItems)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ShoppingList::FIELD_LINE_ITEMS);
           if (is_null($data)) {
               return null;
           }
           $this->lineItems = ShoppingListLineItemCollection::fromArray($data);
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
           $data = $this->raw(ShoppingList::FIELD_ANONYMOUS_ID);
           if (is_null($data)) {
               return null;
           }
           $this->anonymousId = (string)$data;
       }
       return $this->anonymousId;
    }
    
    /**
     *
     * @return TextLineItemCollection|null
     */
    final public function getTextLineItems()
    {
       if (is_null($this->textLineItems)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ShoppingList::FIELD_TEXT_LINE_ITEMS);
           if (is_null($data)) {
               return null;
           }
           $this->textLineItems = TextLineItemCollection::fromArray($data);
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
           $data = $this->raw(ShoppingList::FIELD_DELETE_DAYS_AFTER_LAST_MODIFICATION);
           if (is_null($data)) {
               return null;
           }
           $this->deleteDaysAfterLastModification = (int)$data;
       }
       return $this->deleteDaysAfterLastModification;
    }
    
    /**
     *
     * @return CustomFields|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShoppingList::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsModel::of($data);
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
           $data = $this->raw(ShoppingList::FIELD_NAME);
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
           $data = $this->raw(ShoppingList::FIELD_DESCRIPTION);
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
           $data = $this->raw(ShoppingList::FIELD_SLUG);
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
           $data = $this->raw(ShoppingList::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    
    /**
     *
     * @return CustomerReference|null
     */
    final public function getCustomer()
    {
       if (is_null($this->customer)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShoppingList::FIELD_CUSTOMER);
           if (is_null($data)) {
               return null;
           }
           
           $this->customer = CustomerReferenceModel::of($data);
       }
       return $this->customer;
    }
    final public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
    
    final public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }
    
    final public function setId(?string $id): void
    {
        $this->id = $id;
    }
    
    final public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
    
    final public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }
    
    final public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }
    
    final public function setLineItems(?ShoppingListLineItemCollection $lineItems): void
    {
        $this->lineItems = $lineItems;
    }
    
    final public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }
    
    final public function setTextLineItems(?TextLineItemCollection $textLineItems): void
    {
        $this->textLineItems = $textLineItems;
    }
    
    final public function setDeleteDaysAfterLastModification(?int $deleteDaysAfterLastModification): void
    {
        $this->deleteDaysAfterLastModification = $deleteDaysAfterLastModification;
    }
    
    final public function setCustom(?CustomFields $custom): void
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
    
    final public function setCustomer(?CustomerReference $customer): void
    {
        $this->customer = $customer;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[BaseResource::FIELD_CREATED_AT]) && $data[BaseResource::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
           $data[BaseResource::FIELD_CREATED_AT] = $data[BaseResource::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[BaseResource::FIELD_LAST_MODIFIED_AT]) && $data[BaseResource::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
           $data[BaseResource::FIELD_LAST_MODIFIED_AT] = $data[BaseResource::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}