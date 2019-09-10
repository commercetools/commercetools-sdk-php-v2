<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;

final class AssetModel extends JsonObjectModel implements Asset
{
    
    public function __construct(
        AssetSourceCollection $sources = null,
        CustomFields $custom = null,
        LocalizedString $name = null,
        LocalizedString $description = null,
        string $id = null,
        string $key = null,
        array $tags = null
    ) {
        $this->sources = $sources;
        $this->custom = $custom;
        $this->name = $name;
        $this->description = $description;
        $this->id = $id;
        $this->key = $key;
        $this->tags = $tags;
        
    }

    /**
     * @var ?AssetSourceCollection
     */
    protected $sources;
    
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
     * @var ?string
     */
    protected $id;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?array
     */
    protected $tags;

    /**
     *
     * @return AssetSourceCollection|null
     */
    final public function getSources()
    {
       if (is_null($this->sources)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(Asset::FIELD_SOURCES);
           if (is_null($data)) {
               return null;
           }
           $this->sources = AssetSourceCollection::fromArray($data);
       }
       return $this->sources;
    }
    
    /**
     *
     * @return CustomFields|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(Asset::FIELD_CUSTOM);
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
           $data = $this->raw(Asset::FIELD_NAME);
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
           $data = $this->raw(Asset::FIELD_DESCRIPTION);
           if (is_null($data)) {
               return null;
           }
           
           $this->description = LocalizedStringModel::of($data);
       }
       return $this->description;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getId()
    {
       if (is_null($this->id)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Asset::FIELD_ID);
           if (is_null($data)) {
               return null;
           }
           $this->id = (string)$data;
       }
       return $this->id;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(Asset::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getTags()
    {
       if (is_null($this->tags)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(Asset::FIELD_TAGS);
           if (is_null($data)) {
               return null;
           }
           $this->tags = $data;
       }
       return $this->tags;
    }
    final public function setSources(?AssetSourceCollection $sources): void
    {
        $this->sources = $sources;
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
    
    final public function setId(?string $id): void
    {
        $this->id = $id;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
    final public function setTags(?array $tags): void
    {
        $this->tags = $tags;
    }
    
}