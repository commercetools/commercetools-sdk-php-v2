<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\CartDiscount\CartDiscountReferenceCollection;
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
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class DiscountCodeModel extends JsonObjectModel implements DiscountCode
{
    
    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $id = null,
        int $version = null,
        CreatedBy $createdBy = null,
        LastModifiedBy $lastModifiedBy = null,
        CartDiscountReferenceCollection $cartDiscounts = null,
        string $code = null,
        ReferenceCollection $references = null,
        string $cartPredicate = null,
        CustomFields $custom = null,
        LocalizedString $name = null,
        DateTimeImmutable $validUntil = null,
        array $groups = null,
        LocalizedString $description = null,
        DateTimeImmutable $validFrom = null,
        int $maxApplicationsPerCustomer = null,
        bool $isActive = null,
        int $maxApplications = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->id = $id;
        $this->version = $version;
        $this->createdBy = $createdBy;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->cartDiscounts = $cartDiscounts;
        $this->code = $code;
        $this->references = $references;
        $this->cartPredicate = $cartPredicate;
        $this->custom = $custom;
        $this->name = $name;
        $this->validUntil = $validUntil;
        $this->groups = $groups;
        $this->description = $description;
        $this->validFrom = $validFrom;
        $this->maxApplicationsPerCustomer = $maxApplicationsPerCustomer;
        $this->isActive = $isActive;
        $this->maxApplications = $maxApplications;
        
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
     * @var ?CartDiscountReferenceCollection
     */
    protected $cartDiscounts;
    
    /**
     * @var ?string
     */
    protected $code;
    
    /**
     * @var ?ReferenceCollection
     */
    protected $references;
    
    /**
     * @var ?string
     */
    protected $cartPredicate;
    
    /**
     * @var ?CustomFields
     */
    protected $custom;
    
    /**
     * @var ?LocalizedString
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
     * @var ?LocalizedString
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
     * @return CartDiscountReferenceCollection|null
     */
    final public function getCartDiscounts()
    {
       if (is_null($this->cartDiscounts)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(DiscountCode::FIELD_CART_DISCOUNTS);
           if (is_null($data)) {
               return null;
           }
           $this->cartDiscounts = CartDiscountReferenceCollection::fromArray($data);
       }
       return $this->cartDiscounts;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getCode()
    {
       if (is_null($this->code)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(DiscountCode::FIELD_CODE);
           if (is_null($data)) {
               return null;
           }
           $this->code = (string)$data;
       }
       return $this->code;
    }
    
    /**
     *
     * @return ReferenceCollection|null
     */
    final public function getReferences()
    {
       if (is_null($this->references)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(DiscountCode::FIELD_REFERENCES);
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
    final public function getCartPredicate()
    {
       if (is_null($this->cartPredicate)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(DiscountCode::FIELD_CART_PREDICATE);
           if (is_null($data)) {
               return null;
           }
           $this->cartPredicate = (string)$data;
       }
       return $this->cartPredicate;
    }
    
    /**
     *
     * @return CustomFields|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(DiscountCode::FIELD_CUSTOM);
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
           $data = $this->raw(DiscountCode::FIELD_NAME);
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
           $data = $this->raw(DiscountCode::FIELD_VALID_UNTIL);
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
     * @return array|null
     */
    final public function getGroups()
    {
       if (is_null($this->groups)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(DiscountCode::FIELD_GROUPS);
           if (is_null($data)) {
               return null;
           }
           $this->groups = $data;
       }
       return $this->groups;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getDescription()
    {
       if (is_null($this->description)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(DiscountCode::FIELD_DESCRIPTION);
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
           $data = $this->raw(DiscountCode::FIELD_VALID_FROM);
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
     * @return int|null
     */
    final public function getMaxApplicationsPerCustomer()
    {
       if (is_null($this->maxApplicationsPerCustomer)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(DiscountCode::FIELD_MAX_APPLICATIONS_PER_CUSTOMER);
           if (is_null($data)) {
               return null;
           }
           $this->maxApplicationsPerCustomer = (int)$data;
       }
       return $this->maxApplicationsPerCustomer;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getIsActive()
    {
       if (is_null($this->isActive)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(DiscountCode::FIELD_IS_ACTIVE);
           if (is_null($data)) {
               return null;
           }
           $this->isActive = (bool)$data;
       }
       return $this->isActive;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getMaxApplications()
    {
       if (is_null($this->maxApplications)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(DiscountCode::FIELD_MAX_APPLICATIONS);
           if (is_null($data)) {
               return null;
           }
           $this->maxApplications = (int)$data;
       }
       return $this->maxApplications;
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
    
    final public function setCartDiscounts(?CartDiscountReferenceCollection $cartDiscounts): void
    {
        $this->cartDiscounts = $cartDiscounts;
    }
    
    final public function setCode(?string $code): void
    {
        $this->code = $code;
    }
    
    final public function setReferences(?ReferenceCollection $references): void
    {
        $this->references = $references;
    }
    
    final public function setCartPredicate(?string $cartPredicate): void
    {
        $this->cartPredicate = $cartPredicate;
    }
    
    final public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }
    
    final public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
    
    final public function setValidUntil(?DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }
    
    final public function setGroups(?array $groups): void
    {
        $this->groups = $groups;
    }
    
    final public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }
    
    final public function setValidFrom(?DateTimeImmutable $validFrom): void
    {
        $this->validFrom = $validFrom;
    }
    
    final public function setMaxApplicationsPerCustomer(?int $maxApplicationsPerCustomer): void
    {
        $this->maxApplicationsPerCustomer = $maxApplicationsPerCustomer;
    }
    
    final public function setIsActive(?bool $isActive): void
    {
        $this->isActive = $isActive;
    }
    
    final public function setMaxApplications(?int $maxApplications): void
    {
        $this->maxApplications = $maxApplications;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[BaseResource::FIELD_CREATED_AT]) && $data[BaseResource::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
           $data[BaseResource::FIELD_CREATED_AT] = $data[BaseResource::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[BaseResource::FIELD_LAST_MODIFIED_AT]) && $data[BaseResource::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
           $data[BaseResource::FIELD_LAST_MODIFIED_AT] = $data[BaseResource::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[DiscountCode::FIELD_VALID_UNTIL]) && $data[DiscountCode::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
           $data[DiscountCode::FIELD_VALID_UNTIL] = $data[DiscountCode::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[DiscountCode::FIELD_VALID_FROM]) && $data[DiscountCode::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
           $data[DiscountCode::FIELD_VALID_FROM] = $data[DiscountCode::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}