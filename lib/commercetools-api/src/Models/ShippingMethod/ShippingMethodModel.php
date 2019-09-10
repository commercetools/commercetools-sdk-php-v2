<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceModel;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReference;
use Commercetools\Api\Models\TaxCategory\TaxCategoryReferenceModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class ShippingMethodModel extends JsonObjectModel implements ShippingMethod
{
    
    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $id = null,
        int $version = null,
        ZoneRateCollection $zoneRates = null,
        string $predicate = null,
        bool $isDefault = null,
        string $name = null,
        string $description = null,
        string $key = null,
        TaxCategoryReference $taxCategory = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->id = $id;
        $this->version = $version;
        $this->zoneRates = $zoneRates;
        $this->predicate = $predicate;
        $this->isDefault = $isDefault;
        $this->name = $name;
        $this->description = $description;
        $this->key = $key;
        $this->taxCategory = $taxCategory;
        
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
     * @var ?ZoneRateCollection
     */
    protected $zoneRates;
    
    /**
     * @var ?string
     */
    protected $predicate;
    
    /**
     * @var ?bool
     */
    protected $isDefault;
    
    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $description;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?TaxCategoryReference
     */
    protected $taxCategory;

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
     * @return ZoneRateCollection|null
     */
    final public function getZoneRates()
    {
       if (is_null($this->zoneRates)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(ShippingMethod::FIELD_ZONE_RATES);
           if (is_null($data)) {
               return null;
           }
           $this->zoneRates = ZoneRateCollection::fromArray($data);
       }
       return $this->zoneRates;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPredicate()
    {
       if (is_null($this->predicate)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShippingMethod::FIELD_PREDICATE);
           if (is_null($data)) {
               return null;
           }
           $this->predicate = (string)$data;
       }
       return $this->predicate;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getIsDefault()
    {
       if (is_null($this->isDefault)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ShippingMethod::FIELD_IS_DEFAULT);
           if (is_null($data)) {
               return null;
           }
           $this->isDefault = (bool)$data;
       }
       return $this->isDefault;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShippingMethod::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->name = (string)$data;
       }
       return $this->name;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getDescription()
    {
       if (is_null($this->description)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShippingMethod::FIELD_DESCRIPTION);
           if (is_null($data)) {
               return null;
           }
           $this->description = (string)$data;
       }
       return $this->description;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ShippingMethod::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    
    /**
     *
     * @return TaxCategoryReference|null
     */
    final public function getTaxCategory()
    {
       if (is_null($this->taxCategory)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ShippingMethod::FIELD_TAX_CATEGORY);
           if (is_null($data)) {
               return null;
           }
           
           $this->taxCategory = TaxCategoryReferenceModel::of($data);
       }
       return $this->taxCategory;
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
    
    final public function setZoneRates(?ZoneRateCollection $zoneRates): void
    {
        $this->zoneRates = $zoneRates;
    }
    
    final public function setPredicate(?string $predicate): void
    {
        $this->predicate = $predicate;
    }
    
    final public function setIsDefault(?bool $isDefault): void
    {
        $this->isDefault = $isDefault;
    }
    
    final public function setName(?string $name): void
    {
        $this->name = $name;
    }
    
    final public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
    final public function setTaxCategory(?TaxCategoryReference $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
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