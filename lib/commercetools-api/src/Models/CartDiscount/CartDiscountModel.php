<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

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
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class CartDiscountModel extends JsonObjectModel implements CartDiscount
{
    
    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $id = null,
        int $version = null,
        CreatedBy $createdBy = null,
        LastModifiedBy $lastModifiedBy = null,
        bool $requiresDiscountCode = null,
        ReferenceCollection $references = null,
        string $cartPredicate = null,
        CustomFields $custom = null,
        LocalizedString $description = null,
        DateTimeImmutable $validFrom = null,
        bool $isActive = null,
        CartDiscountTarget $target = null,
        string $stackingMode = null,
        string $sortOrder = null,
        LocalizedString $name = null,
        DateTimeImmutable $validUntil = null,
        CartDiscountValue $value = null,
        string $key = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->id = $id;
        $this->version = $version;
        $this->createdBy = $createdBy;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->requiresDiscountCode = $requiresDiscountCode;
        $this->references = $references;
        $this->cartPredicate = $cartPredicate;
        $this->custom = $custom;
        $this->description = $description;
        $this->validFrom = $validFrom;
        $this->isActive = $isActive;
        $this->target = $target;
        $this->stackingMode = $stackingMode;
        $this->sortOrder = $sortOrder;
        $this->name = $name;
        $this->validUntil = $validUntil;
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
     * @var ?bool
     */
    protected $requiresDiscountCode;
    
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
     * @var ?CartDiscountTarget
     */
    protected $target;
    
    /**
     * @var ?string
     */
    protected $stackingMode;
    
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
     * @var ?CartDiscountValue
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
     * @return bool|null
     */
    final public function getRequiresDiscountCode()
    {
       if (is_null($this->requiresDiscountCode)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(CartDiscount::FIELD_REQUIRES_DISCOUNT_CODE);
           if (is_null($data)) {
               return null;
           }
           $this->requiresDiscountCode = (bool)$data;
       }
       return $this->requiresDiscountCode;
    }
    
    /**
     *
     * @return ReferenceCollection|null
     */
    final public function getReferences()
    {
       if (is_null($this->references)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(CartDiscount::FIELD_REFERENCES);
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
           $data = $this->raw(CartDiscount::FIELD_CART_PREDICATE);
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
           $data = $this->raw(CartDiscount::FIELD_CUSTOM);
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
    final public function getDescription()
    {
       if (is_null($this->description)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartDiscount::FIELD_DESCRIPTION);
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
           $data = $this->raw(CartDiscount::FIELD_VALID_FROM);
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
           $data = $this->raw(CartDiscount::FIELD_IS_ACTIVE);
           if (is_null($data)) {
               return null;
           }
           $this->isActive = (bool)$data;
       }
       return $this->isActive;
    }
    
    /**
     *
     * @return CartDiscountTarget|null
     */
    final public function getTarget()
    {
       if (is_null($this->target)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartDiscount::FIELD_TARGET);
           if (is_null($data)) {
               return null;
           }
           $className = CartDiscountTargetModel::resolveDiscriminatorClass($data);
           $this->target = $className::of($data);
       }
       return $this->target;
    }
    
    /**
     * <p>Specifies whether the application of this discount causes the following discounts to be ignored.
    * Defaults to Stacking.</p>
     * @return string|null
     */
    final public function getStackingMode()
    {
       if (is_null($this->stackingMode)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDiscount::FIELD_STACKING_MODE);
           if (is_null($data)) {
               return null;
           }
           $this->stackingMode = (string)$data;
       }
       return $this->stackingMode;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSortOrder()
    {
       if (is_null($this->sortOrder)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDiscount::FIELD_SORT_ORDER);
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
           $data = $this->raw(CartDiscount::FIELD_NAME);
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
           $data = $this->raw(CartDiscount::FIELD_VALID_UNTIL);
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
     * @return CartDiscountValue|null
     */
    final public function getValue()
    {
       if (is_null($this->value)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartDiscount::FIELD_VALUE);
           if (is_null($data)) {
               return null;
           }
           $className = CartDiscountValueModel::resolveDiscriminatorClass($data);
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
           $data = $this->raw(CartDiscount::FIELD_KEY);
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
    
    final public function setRequiresDiscountCode(?bool $requiresDiscountCode): void
    {
        $this->requiresDiscountCode = $requiresDiscountCode;
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
    
    final public function setTarget(?CartDiscountTarget $target): void
    {
        $this->target = $target;
    }
    
    final public function setStackingMode(?string $stackingMode): void
    {
        $this->stackingMode = $stackingMode;
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
    
    final public function setValue(?CartDiscountValue $value): void
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
        
        if (isset($data[CartDiscount::FIELD_VALID_FROM]) && $data[CartDiscount::FIELD_VALID_FROM] instanceof \DateTimeImmutable) {
           $data[CartDiscount::FIELD_VALID_FROM] = $data[CartDiscount::FIELD_VALID_FROM]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        
        if (isset($data[CartDiscount::FIELD_VALID_UNTIL]) && $data[CartDiscount::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
           $data[CartDiscount::FIELD_VALID_UNTIL] = $data[CartDiscount::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}