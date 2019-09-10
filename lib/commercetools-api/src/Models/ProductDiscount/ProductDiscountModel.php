<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ProductDiscount;

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
use Commercetools\Api\Models\Common\ReferenceCollection;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class ProductDiscountModel extends JsonObjectModel implements ProductDiscount
{
    
    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $id = null,
        int $version = null,
        CreatedBy $createdBy = null,
        LastModifiedBy $lastModifiedBy = null,
        string $predicate = null,
        ReferenceCollection $references = null,
        string $sortOrder = null,
        LocalizedString $name = null,
        DateTimeImmutable $validUntil = null,
        LocalizedString $description = null,
        DateTimeImmutable $validFrom = null,
        bool $isActive = null,
        ProductDiscountValue $value = null,
        string $key = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->id = $id;
        $this->version = $version;
        $this->createdBy = $createdBy;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->predicate = $predicate;
        $this->references = $references;
        $this->sortOrder = $sortOrder;
        $this->name = $name;
        $this->validUntil = $validUntil;
        $this->description = $description;
        $this->validFrom = $validFrom;
        $this->isActive = $isActive;
        $this->value = $value;
        $this->key = $key;
        
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
     * @var ?string
     */
    protected $predicate;
    
    /**
     * @var ?ReferenceCollection
     */
    protected $references;
    
    /**
     * @var ?string
     */
    protected $sortOrder;
    
    /**
     * @var ?LocalizedString
     */
    protected $name;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $validUntil;
    
    /**
     * @var ?LocalizedString
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
     * @var ?ProductDiscountValue
     */
    protected $value;
    
    /**
     * @var ?string
     */
    protected $key;

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
     * @return string|null
     */
    final public function getPredicate()
    {
       if (is_null($this->predicate)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductDiscount::FIELD_PREDICATE);
           if (is_null($data)) {
               return null;
           }
           $this->predicate = (string)$data;
       }
       return $this->predicate;
    }
    
    /**
     *
     * @return ReferenceCollection|null
     */
    final public function getReferences()
    {
       if (is_null($this->references)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ProductDiscount::FIELD_REFERENCES);
           if (is_null($data)) {
               return null;
           }
           $this->references = ReferenceCollection::fromArray($data);
       }
       return $this->references;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSortOrder()
    {
       if (is_null($this->sortOrder)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductDiscount::FIELD_SORT_ORDER);
           if (is_null($data)) {
               return null;
           }
           $this->sortOrder = (string)$data;
       }
       return $this->sortOrder;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductDiscount::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           
           $this->name = LocalizedStringModel::of($data);
       }
       return $this->name;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getValidUntil()
    {
       if (is_null($this->validUntil)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductDiscount::FIELD_VALID_UNTIL);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->validUntil = $data;
       }
       return $this->validUntil;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getDescription()
    {
       if (is_null($this->description)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductDiscount::FIELD_DESCRIPTION);
           if (is_null($data)) {
               return null;
           }
           
           $this->description = LocalizedStringModel::of($data);
       }
       return $this->description;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getValidFrom()
    {
       if (is_null($this->validFrom)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductDiscount::FIELD_VALID_FROM);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->validFrom = $data;
       }
       return $this->validFrom;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getIsActive()
    {
       if (is_null($this->isActive)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductDiscount::FIELD_IS_ACTIVE);
           if (is_null($data)) {
               return null;
           }
           $this->isActive = (bool)$data;
       }
       return $this->isActive;
    }
    
    /**
     *
     * @return ProductDiscountValue|null
     */
    final public function getValue()
    {
       if (is_null($this->value)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductDiscount::FIELD_VALUE);
           if (is_null($data)) {
               return null;
           }
           $className = ProductDiscountValueModel::resolveDiscriminatorClass($data);
           $this->value = $className::of($data);
       }
       return $this->value;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductDiscount::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
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
    
    final public function setPredicate(?string $predicate): void
    {
        $this->predicate = $predicate;
    }
    
    final public function setReferences(?ReferenceCollection $references): void
    {
        $this->references = $references;
    }
    
    final public function setSortOrder(?string $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }
    
    final public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
    
    final public function setValidUntil(?DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }
    
    final public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }
    
    final public function setValidFrom(?DateTimeImmutable $validFrom): void
    {
        $this->validFrom = $validFrom;
    }
    
    final public function setIsActive(?bool $isActive): void
    {
        $this->isActive = $isActive;
    }
    
    final public function setValue(?ProductDiscountValue $value): void
    {
        $this->value = $value;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[BaseResource::FIELD_CREATED_AT]) && $data[BaseResource::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
           $data[BaseResource::FIELD_CREATED_AT] = $data[BaseResource::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[BaseResource::FIELD_LAST_MODIFIED_AT]) && $data[BaseResource::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
           $data[BaseResource::FIELD_LAST_MODIFIED_AT] = $data[BaseResource::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[ProductDiscount::FIELD_VALID_UNTIL]) && $data[ProductDiscount::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
           $data[ProductDiscount::FIELD_VALID_UNTIL] = $data[ProductDiscount::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[ProductDiscount::FIELD_VALID_FROM]) && $data[ProductDiscount::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
           $data[ProductDiscount::FIELD_VALID_FROM] = $data[ProductDiscount::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}