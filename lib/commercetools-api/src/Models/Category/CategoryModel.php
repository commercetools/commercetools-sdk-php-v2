<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Common\LoggedResource;
use Commercetools\Api\Models\Common\LoggedResourceModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use DateTimeImmutable;
use DateTimeImmutableModel;

final class CategoryModel extends JsonObjectModel implements Category
{
    
    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        string $id = null,
        int $version = null,
        CreatedBy $createdBy = null,
        LastModifiedBy $lastModifiedBy = null,
        CategoryReference $parent = null,
        AssetCollection $assets = null,
        LocalizedString $metaKeywords = null,
        string $orderHint = null,
        CustomFields $custom = null,
        LocalizedString $metaTitle = null,
        LocalizedString $name = null,
        string $externalId = null,
        LocalizedString $description = null,
        CategoryReferenceCollection $ancestors = null,
        LocalizedString $metaDescription = null,
        string $key = null,
        LocalizedString $slug = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->id = $id;
        $this->version = $version;
        $this->createdBy = $createdBy;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->parent = $parent;
        $this->assets = $assets;
        $this->metaKeywords = $metaKeywords;
        $this->orderHint = $orderHint;
        $this->custom = $custom;
        $this->metaTitle = $metaTitle;
        $this->name = $name;
        $this->externalId = $externalId;
        $this->description = $description;
        $this->ancestors = $ancestors;
        $this->metaDescription = $metaDescription;
        $this->key = $key;
        $this->slug = $slug;
        
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
     * @var ?CategoryReference
     */
    protected $parent;
    
    /**
     * @var ?AssetCollection
     */
    protected $assets;
    
    /**
     * @var ?LocalizedString
     */
    protected $metaKeywords;
    
    /**
     * @var ?string
     */
    protected $orderHint;
    
    /**
     * @var ?CustomFields
     */
    protected $custom;
    
    /**
     * @var ?LocalizedString
     */
    protected $metaTitle;
    
    /**
     * @var ?LocalizedString
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $externalId;
    
    /**
     * @var ?LocalizedString
     */
    protected $description;
    
    /**
     * @var ?CategoryReferenceCollection
     */
    protected $ancestors;
    
    /**
     * @var ?LocalizedString
     */
    protected $metaDescription;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?LocalizedString
     */
    protected $slug;

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
     * @return CategoryReference|null
     */
    final public function getParent()
    {
       if (is_null($this->parent)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Category::FIELD_PARENT);
           if (is_null($data)) {
               return null;
           }
           
           $this->parent = CategoryReferenceModel::of($data);
       }
       return $this->parent;
    }
    
    /**
     *
     * @return AssetCollection|null
     */
    final public function getAssets()
    {
       if (is_null($this->assets)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(Category::FIELD_ASSETS);
           if (is_null($data)) {
               return null;
           }
           $this->assets = AssetCollection::fromArray($data);
       }
       return $this->assets;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getMetaKeywords()
    {
       if (is_null($this->metaKeywords)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Category::FIELD_META_KEYWORDS);
           if (is_null($data)) {
               return null;
           }
           
           $this->metaKeywords = LocalizedStringModel::of($data);
       }
       return $this->metaKeywords;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getOrderHint()
    {
       if (is_null($this->orderHint)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Category::FIELD_ORDER_HINT);
           if (is_null($data)) {
               return null;
           }
           $this->orderHint = (string)$data;
       }
       return $this->orderHint;
    }
    
    /**
     *
     * @return CustomFields|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Category::FIELD_CUSTOM);
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
    final public function getMetaTitle()
    {
       if (is_null($this->metaTitle)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Category::FIELD_META_TITLE);
           if (is_null($data)) {
               return null;
           }
           
           $this->metaTitle = LocalizedStringModel::of($data);
       }
       return $this->metaTitle;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Category::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           
           $this->name = LocalizedStringModel::of($data);
       }
       return $this->name;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getExternalId()
    {
       if (is_null($this->externalId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Category::FIELD_EXTERNAL_ID);
           if (is_null($data)) {
               return null;
           }
           $this->externalId = (string)$data;
       }
       return $this->externalId;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getDescription()
    {
       if (is_null($this->description)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Category::FIELD_DESCRIPTION);
           if (is_null($data)) {
               return null;
           }
           
           $this->description = LocalizedStringModel::of($data);
       }
       return $this->description;
    }
    
    /**
     *
     * @return CategoryReferenceCollection|null
     */
    final public function getAncestors()
    {
       if (is_null($this->ancestors)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(Category::FIELD_ANCESTORS);
           if (is_null($data)) {
               return null;
           }
           $this->ancestors = CategoryReferenceCollection::fromArray($data);
       }
       return $this->ancestors;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getMetaDescription()
    {
       if (is_null($this->metaDescription)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Category::FIELD_META_DESCRIPTION);
           if (is_null($data)) {
               return null;
           }
           
           $this->metaDescription = LocalizedStringModel::of($data);
       }
       return $this->metaDescription;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Category::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getSlug()
    {
       if (is_null($this->slug)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Category::FIELD_SLUG);
           if (is_null($data)) {
               return null;
           }
           
           $this->slug = LocalizedStringModel::of($data);
       }
       return $this->slug;
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
    
    final public function setParent(?CategoryReference $parent): void
    {
        $this->parent = $parent;
    }
    
    final public function setAssets(?AssetCollection $assets): void
    {
        $this->assets = $assets;
    }
    
    final public function setMetaKeywords(?LocalizedString $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }
    
    final public function setOrderHint(?string $orderHint): void
    {
        $this->orderHint = $orderHint;
    }
    
    final public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }
    
    final public function setMetaTitle(?LocalizedString $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }
    
    final public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
    
    final public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }
    
    final public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }
    
    final public function setAncestors(?CategoryReferenceCollection $ancestors): void
    {
        $this->ancestors = $ancestors;
    }
    
    final public function setMetaDescription(?LocalizedString $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
    final public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
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