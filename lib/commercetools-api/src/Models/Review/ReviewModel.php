<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Review;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\LoggedResourceModel;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceModel;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class ReviewModel extends JsonObjectModel implements Review
{
    
    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $id = null,
        int $version = null,
        CreatedBy $createdBy = null,
        LastModifiedBy $lastModifiedBy = null,
        bool $includedInStatistics = null,
        string $uniquenessValue = null,
        string $authorName = null,
        CustomFields $custom = null,
        int $rating = null,
        StateReference $state = null,
        string $text = null,
        string $title = null,
        string $locale = null,
        string $key = null,
        CustomerReference $customer = null,
        JsonObject $target = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->id = $id;
        $this->version = $version;
        $this->createdBy = $createdBy;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->includedInStatistics = $includedInStatistics;
        $this->uniquenessValue = $uniquenessValue;
        $this->authorName = $authorName;
        $this->custom = $custom;
        $this->rating = $rating;
        $this->state = $state;
        $this->text = $text;
        $this->title = $title;
        $this->locale = $locale;
        $this->key = $key;
        $this->customer = $customer;
        $this->target = $target;
        
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
    protected $includedInStatistics;
    
    /**
     * @var ?string
     */
    protected $uniquenessValue;
    
    /**
     * @var ?string
     */
    protected $authorName;
    
    /**
     * @var ?CustomFields
     */
    protected $custom;
    
    /**
     * @var ?int
     */
    protected $rating;
    
    /**
     * @var ?StateReference
     */
    protected $state;
    
    /**
     * @var ?string
     */
    protected $text;
    
    /**
     * @var ?string
     */
    protected $title;
    
    /**
     * @var ?string
     */
    protected $locale;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?CustomerReference
     */
    protected $customer;
    
    /**
     * @var ?JsonObject
     */
    protected $target;

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
    final public function getIncludedInStatistics()
    {
       if (is_null($this->includedInStatistics)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(Review::FIELD_INCLUDED_IN_STATISTICS);
           if (is_null($data)) {
               return null;
           }
           $this->includedInStatistics = (bool)$data;
       }
       return $this->includedInStatistics;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getUniquenessValue()
    {
       if (is_null($this->uniquenessValue)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Review::FIELD_UNIQUENESS_VALUE);
           if (is_null($data)) {
               return null;
           }
           $this->uniquenessValue = (string)$data;
       }
       return $this->uniquenessValue;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getAuthorName()
    {
       if (is_null($this->authorName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Review::FIELD_AUTHOR_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->authorName = (string)$data;
       }
       return $this->authorName;
    }
    
    /**
     *
     * @return CustomFields|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Review::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsModel::of($data);
       }
       return $this->custom;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getRating()
    {
       if (is_null($this->rating)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(Review::FIELD_RATING);
           if (is_null($data)) {
               return null;
           }
           $this->rating = (int)$data;
       }
       return $this->rating;
    }
    
    /**
     *
     * @return StateReference|null
     */
    final public function getState()
    {
       if (is_null($this->state)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Review::FIELD_STATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->state = StateReferenceModel::of($data);
       }
       return $this->state;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getText()
    {
       if (is_null($this->text)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Review::FIELD_TEXT);
           if (is_null($data)) {
               return null;
           }
           $this->text = (string)$data;
       }
       return $this->text;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getTitle()
    {
       if (is_null($this->title)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Review::FIELD_TITLE);
           if (is_null($data)) {
               return null;
           }
           $this->title = (string)$data;
       }
       return $this->title;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getLocale()
    {
       if (is_null($this->locale)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Review::FIELD_LOCALE);
           if (is_null($data)) {
               return null;
           }
           $this->locale = (string)$data;
       }
       return $this->locale;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Review::FIELD_KEY);
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
           $data = $this->raw(Review::FIELD_CUSTOMER);
           if (is_null($data)) {
               return null;
           }
           
           $this->customer = CustomerReferenceModel::of($data);
       }
       return $this->customer;
    }
    
    /**
     *
     * @return JsonObject|null
     */
    final public function getTarget()
    {
       if (is_null($this->target)) {
           /** @psalm-var ?stdClass $data */
           $data = $this->raw(Review::FIELD_TARGET);
           if (is_null($data)) {
               return null;
           }
           $this->target = JsonObjectModel::of($data);
       }
       return $this->target;
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
    
    final public function setIncludedInStatistics(?bool $includedInStatistics): void
    {
        $this->includedInStatistics = $includedInStatistics;
    }
    
    final public function setUniquenessValue(?string $uniquenessValue): void
    {
        $this->uniquenessValue = $uniquenessValue;
    }
    
    final public function setAuthorName(?string $authorName): void
    {
        $this->authorName = $authorName;
    }
    
    final public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }
    
    final public function setRating(?int $rating): void
    {
        $this->rating = $rating;
    }
    
    final public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }
    
    final public function setText(?string $text): void
    {
        $this->text = $text;
    }
    
    final public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
    
    final public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
    final public function setCustomer(?CustomerReference $customer): void
    {
        $this->customer = $customer;
    }
    
    final public function setTarget(?JsonObject $target): void
    {
        $this->target = $target;
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