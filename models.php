<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

use Zend\Hydrator\HydrationInterface;

class JsonObject implements \JsonSerializable, HydrationInterface
{
    private $rawData;

    public function __construct(array $data =[])
    {
        $this->rawData = $data;
    }

    protected function raw($field)
    {
        if (isset($this->rawData[$field])) {
            return $this->rawData[$field];
        }
        return null;
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * @inheritdoc
     */
    public static function fromArray(array $data)
    {
        return new static($data);
    }

    /**
     * @inheritdoc
     */
    public function toArray()
    {
        $data = array_filter(
            get_object_vars($this),
            function ($value, $key) {
                if ($key == 'rawData') {
                    return false;
                }
                return !is_null($value);
            },
            ARRAY_FILTER_USE_BOTH
        );
        $data = array_merge($this->rawData, $data);
        return $data;
    }
    
    public function hydrate(array $data, $object)
    {
        $object->rawData = $data;
    }
}

class Collection implements \Iterator, \Countable, \JsonSerializable, HydrationInterface
{
    private $rawData;

    /**
     * @var array
     */
    private $keys = array();

    /**
     * @var int
     */
    private $pos = 0;

    private $indexes = [];

    protected $data = [];

    public function __construct(array $data =[])
    {
        $this->initialize($data);
    }
    
    private function initialize(array $data)
    {
        $this->indexes = [];
        $this->pos = 0;
        $this->keys = array_keys($data);
        $this->index($data);
        $this->rawData = $data;
    }

    protected function raw($field)
    {
        if (isset($this->rawData[$field])) {
            return $this->rawData[$field];
        }
        return null;
    }

    protected function rawSet($field, $data)
    {
        if (!is_null($field)) {
            $this->rawData[$field] = $data;
        } else {
            $this->rawData[] = $data;
        }
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * @inheritdoc
     */
    public static function fromArray(array $data)
    {
        return new static($data);
    }

    /**
     * @inheritdoc
     */
    public function toArray()
    {
        return $this->rawData;
    }

    protected function index($data)
    {
    }

    protected function addToIndex($index, $key, $value)
    {
        $this->indexes[$index][$key] = $value;
    }

    protected function valueByKey($index, $key)
    {
        return isset($this->indexes[$index][$key]) ? $this->at($this->indexes[$index][$key]) : null;
    }

    /**
     * @inheritDoc
     */
    public function current()
    {
        if (isset($this->keys[$this->pos])) {
            return $this->at($this->keys[$this->pos]);
        }
        return null;
    }
    
    public function at($index)
    {
        return $this->raw($index);
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        $this->pos++;
    }

    /**
     * @inheritDoc
     */
    public function key()
    {
        if ($this->valid()) {
            return $this->keys[$this->pos];
        }
        return null;
    }

    /**
     * @inheritDoc
     */
    public function valid()
    {
        return isset($this->keys[$this->pos]);
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        $this->pos = 0;
    }

    /**
     * @inheritDoc
     */
    public function count()
    {
        return count($this->keys);
    }
    
    public function hydrate(array $data, $object)
    {
        $object->initialize($data);
    }
}

class Resource extends JsonObject {
    protected $id;
    protected $version;
    protected $createdAt;
    protected $lastModifiedAt;

    /**
     * @return string
     */
    public function getId(): string
    {
        if (is_null($this->id)) {
            $value = $this->raw('id');
            if (!is_null($value)) {
                $this->id = (string)$value;
            } else {
                return '';
            }
        }
        return $this->id;
    }
                

    /**
     * @return int
     */
    public function getVersion(): int
    {
        if (is_null($this->version)) {
            $value = $this->raw('version');
            if (!is_null($value)) {
                $this->version = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->version;
    }
                

    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt(): \DateTimeImmutable
    {
        if (is_null($this->createdAt)) {
            $value = $this->raw('createdAt');
            if (!is_null($value)) {
                $this->createdAt = new \DateTimeImmutable($value);
            } else {
                return new \DateTimeImmutable();
            }
        }
        return $this->createdAt;
    }
                

    /**
     * @return \DateTimeImmutable
     */
    public function getLastModifiedAt(): \DateTimeImmutable
    {
        if (is_null($this->lastModifiedAt)) {
            $value = $this->raw('lastModifiedAt');
            if (!is_null($value)) {
                $this->lastModifiedAt = new \DateTimeImmutable($value);
            } else {
                return new \DateTimeImmutable();
            }
        }
        return $this->lastModifiedAt;
    }
                
}
class Category extends Resource {
    protected $name;
    protected $slug;
    protected $description;
    protected $ancestors;
    protected $parent;
    protected $orderHint;
    protected $externalId;
    protected $metaTitle;
    protected $metaDescription;
    protected $metaKeywords;
    protected $custom;
    protected $assets;

    /**
     * @return LocalizedString
     */
    public function getName(): LocalizedString
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->name;
    }
                

    /**
     * @return LocalizedString
     */
    public function getSlug(): LocalizedString
    {
        if (is_null($this->slug)) {
            $value = $this->raw('slug');
            if (!is_null($value)) {
                $this->slug = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->slug;
    }
                

    /**
     * @return LocalizedString
     */
    public function getDescription(): LocalizedString
    {
        if (is_null($this->description)) {
            $value = $this->raw('description');
            if (!is_null($value)) {
                $this->description = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->description;
    }
                

    /**
     * @return CategoryReferenceCollection
     */
    public function getAncestors(): CategoryReferenceCollection
    {
        if (is_null($this->ancestors)) {
            $value = $this->raw('ancestors');
            if (!is_null($value)) {
                $this->ancestors = Mapper::map($value, CategoryReferenceCollection::class);
            } else {
                return Mapper::map([], CategoryReferenceCollection::class);
            }
        }
        return $this->ancestors;
    }
                

    /**
     * @return CategoryReference
     */
    public function getParent(): CategoryReference
    {
        if (is_null($this->parent)) {
            $value = $this->raw('parent');
            if (!is_null($value)) {
                $this->parent = Mapper::map($value, CategoryReference::class);
            } else {
                return Mapper::map([], CategoryReference::class);
            }
        }
        return $this->parent;
    }
                

    /**
     * @return string
     */
    public function getOrderHint(): string
    {
        if (is_null($this->orderHint)) {
            $value = $this->raw('orderHint');
            if (!is_null($value)) {
                $this->orderHint = (string)$value;
            } else {
                return '';
            }
        }
        return $this->orderHint;
    }
                

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        if (is_null($this->externalId)) {
            $value = $this->raw('externalId');
            if (!is_null($value)) {
                $this->externalId = (string)$value;
            } else {
                return '';
            }
        }
        return $this->externalId;
    }
                

    /**
     * @return LocalizedString
     */
    public function getMetaTitle(): LocalizedString
    {
        if (is_null($this->metaTitle)) {
            $value = $this->raw('metaTitle');
            if (!is_null($value)) {
                $this->metaTitle = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->metaTitle;
    }
                

    /**
     * @return LocalizedString
     */
    public function getMetaDescription(): LocalizedString
    {
        if (is_null($this->metaDescription)) {
            $value = $this->raw('metaDescription');
            if (!is_null($value)) {
                $this->metaDescription = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->metaDescription;
    }
                

    /**
     * @return LocalizedString
     */
    public function getMetaKeywords(): LocalizedString
    {
        if (is_null($this->metaKeywords)) {
            $value = $this->raw('metaKeywords');
            if (!is_null($value)) {
                $this->metaKeywords = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->metaKeywords;
    }
                

    /**
     * @return CustomFields
     */
    public function getCustom(): CustomFields
    {
        if (is_null($this->custom)) {
            $value = $this->raw('custom');
            if (!is_null($value)) {
                $this->custom = Mapper::map($value, CustomFields::class);
            } else {
                return Mapper::map([], CustomFields::class);
            }
        }
        return $this->custom;
    }
                

    /**
     * @return AssetCollection
     */
    public function getAssets(): AssetCollection
    {
        if (is_null($this->assets)) {
            $value = $this->raw('assets');
            if (!is_null($value)) {
                $this->assets = Mapper::map($value, AssetCollection::class);
            } else {
                return Mapper::map([], AssetCollection::class);
            }
        }
        return $this->assets;
    }
                
}
class CategoryDraft extends JsonObject {
    protected $name;
    protected $slug;
    protected $description;
    protected $parent;
    protected $orderHint;
    protected $externalId;
    protected $metaTitle;
    protected $metaDescription;
    protected $metaKeywords;
    protected $custom;
    protected $assets;

    /**
     * @return LocalizedString
     */
    public function getName(): LocalizedString
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->name;
    }
                

    /**
     * @return LocalizedString
     */
    public function getSlug(): LocalizedString
    {
        if (is_null($this->slug)) {
            $value = $this->raw('slug');
            if (!is_null($value)) {
                $this->slug = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->slug;
    }
                

    /**
     * @return LocalizedString
     */
    public function getDescription(): LocalizedString
    {
        if (is_null($this->description)) {
            $value = $this->raw('description');
            if (!is_null($value)) {
                $this->description = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->description;
    }
                

    /**
     * @return CategoryReference
     */
    public function getParent(): CategoryReference
    {
        if (is_null($this->parent)) {
            $value = $this->raw('parent');
            if (!is_null($value)) {
                $this->parent = Mapper::map($value, CategoryReference::class);
            } else {
                return Mapper::map([], CategoryReference::class);
            }
        }
        return $this->parent;
    }
                

    /**
     * @return string
     */
    public function getOrderHint(): string
    {
        if (is_null($this->orderHint)) {
            $value = $this->raw('orderHint');
            if (!is_null($value)) {
                $this->orderHint = (string)$value;
            } else {
                return '';
            }
        }
        return $this->orderHint;
    }
                

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        if (is_null($this->externalId)) {
            $value = $this->raw('externalId');
            if (!is_null($value)) {
                $this->externalId = (string)$value;
            } else {
                return '';
            }
        }
        return $this->externalId;
    }
                

    /**
     * @return LocalizedString
     */
    public function getMetaTitle(): LocalizedString
    {
        if (is_null($this->metaTitle)) {
            $value = $this->raw('metaTitle');
            if (!is_null($value)) {
                $this->metaTitle = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->metaTitle;
    }
                

    /**
     * @return LocalizedString
     */
    public function getMetaDescription(): LocalizedString
    {
        if (is_null($this->metaDescription)) {
            $value = $this->raw('metaDescription');
            if (!is_null($value)) {
                $this->metaDescription = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->metaDescription;
    }
                

    /**
     * @return LocalizedString
     */
    public function getMetaKeywords(): LocalizedString
    {
        if (is_null($this->metaKeywords)) {
            $value = $this->raw('metaKeywords');
            if (!is_null($value)) {
                $this->metaKeywords = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->metaKeywords;
    }
                

    /**
     * @return CustomFieldsDraft
     */
    public function getCustom(): CustomFieldsDraft
    {
        if (is_null($this->custom)) {
            $value = $this->raw('custom');
            if (!is_null($value)) {
                $this->custom = Mapper::map($value, CustomFieldsDraft::class);
            } else {
                return Mapper::map([], CustomFieldsDraft::class);
            }
        }
        return $this->custom;
    }
                

    /**
     * @return AssetDraftCollection
     */
    public function getAssets(): AssetDraftCollection
    {
        if (is_null($this->assets)) {
            $value = $this->raw('assets');
            if (!is_null($value)) {
                $this->assets = Mapper::map($value, AssetDraftCollection::class);
            } else {
                return Mapper::map([], AssetDraftCollection::class);
            }
        }
        return $this->assets;
    }
                
}
class LocalizedString extends Collection {
}
class Reference extends JsonObject {
    protected $typeId;
    protected $id;

    /**
     * @return string
     */
    public function getTypeId(): string
    {
        if (is_null($this->typeId)) {
            $value = $this->raw('typeId');
            if (!is_null($value)) {
                $this->typeId = (string)$value;
            } else {
                return '';
            }
        }
        return $this->typeId;
    }
                

    /**
     * @return string
     */
    public function getId(): string
    {
        if (is_null($this->id)) {
            $value = $this->raw('id');
            if (!is_null($value)) {
                $this->id = (string)$value;
            } else {
                return '';
            }
        }
        return $this->id;
    }
                
}
class CategoryReference extends Reference {
    protected $obj;

    /**
     * @return Category
     */
    public function getObj(): Category
    {
        if (is_null($this->obj)) {
            $value = $this->raw('obj');
            if (!is_null($value)) {
                $this->obj = Mapper::map($value, Category::class);
            } else {
                return Mapper::map([], Category::class);
            }
        }
        return $this->obj;
    }
                
}
class CustomFields extends JsonObject {
    protected $type;
    protected $fields;

    /**
     * @return TypeReference
     */
    public function getType(): TypeReference
    {
        if (is_null($this->type)) {
            $value = $this->raw('type');
            if (!is_null($value)) {
                $this->type = Mapper::map($value, TypeReference::class);
            } else {
                return Mapper::map([], TypeReference::class);
            }
        }
        return $this->type;
    }
                

    /**
     * @return array
     */
    public function getFields(): array
    {
        if (is_null($this->fields)) {
            $value = $this->raw('fields');
            if (!is_null($value)) {
                $this->fields = $value;
            } else {
                return [];
            }
        }
        return $this->fields;
    }
                
}
class CustomFieldsDraft extends JsonObject {
    protected $type;
    protected $fields;

    /**
     * @return TypeReference
     */
    public function getType(): TypeReference
    {
        if (is_null($this->type)) {
            $value = $this->raw('type');
            if (!is_null($value)) {
                $this->type = Mapper::map($value, TypeReference::class);
            } else {
                return Mapper::map([], TypeReference::class);
            }
        }
        return $this->type;
    }
                

    /**
     * @return array
     */
    public function getFields(): array
    {
        if (is_null($this->fields)) {
            $value = $this->raw('fields');
            if (!is_null($value)) {
                $this->fields = $value;
            } else {
                return [];
            }
        }
        return $this->fields;
    }
                
}
class Asset extends JsonObject {
    protected $id;
    protected $sources;
    protected $name;
    protected $description;
    protected $tags;
    protected $custom;

    /**
     * @return string
     */
    public function getId(): string
    {
        if (is_null($this->id)) {
            $value = $this->raw('id');
            if (!is_null($value)) {
                $this->id = (string)$value;
            } else {
                return '';
            }
        }
        return $this->id;
    }
                

    /**
     * @return AssetSourceCollection
     */
    public function getSources(): AssetSourceCollection
    {
        if (is_null($this->sources)) {
            $value = $this->raw('sources');
            if (!is_null($value)) {
                $this->sources = Mapper::map($value, AssetSourceCollection::class);
            } else {
                return Mapper::map([], AssetSourceCollection::class);
            }
        }
        return $this->sources;
    }
                

    /**
     * @return LocalizedString
     */
    public function getName(): LocalizedString
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->name;
    }
                

    /**
     * @return LocalizedString
     */
    public function getDescription(): LocalizedString
    {
        if (is_null($this->description)) {
            $value = $this->raw('description');
            if (!is_null($value)) {
                $this->description = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->description;
    }
                

    /**
     * @return array
     */
    public function getTags(): array
    {
        if (is_null($this->tags)) {
            $value = $this->raw('tags');
            if (!is_null($value)) {
                $this->tags = $value;
            } else {
                return [];
            }
        }
        return $this->tags;
    }
                

    /**
     * @return CustomFields
     */
    public function getCustom(): CustomFields
    {
        if (is_null($this->custom)) {
            $value = $this->raw('custom');
            if (!is_null($value)) {
                $this->custom = Mapper::map($value, CustomFields::class);
            } else {
                return Mapper::map([], CustomFields::class);
            }
        }
        return $this->custom;
    }
                
}
class AssetSource extends JsonObject {
    protected $uri;
    protected $key;
    protected $dimensions;
    protected $contentType;

    /**
     * @return string
     */
    public function getUri(): string
    {
        if (is_null($this->uri)) {
            $value = $this->raw('uri');
            if (!is_null($value)) {
                $this->uri = (string)$value;
            } else {
                return '';
            }
        }
        return $this->uri;
    }
                

    /**
     * @return string
     */
    public function getKey(): string
    {
        if (is_null($this->key)) {
            $value = $this->raw('key');
            if (!is_null($value)) {
                $this->key = (string)$value;
            } else {
                return '';
            }
        }
        return $this->key;
    }
                

    /**
     * @return AssetDimensions
     */
    public function getDimensions(): AssetDimensions
    {
        if (is_null($this->dimensions)) {
            $value = $this->raw('dimensions');
            if (!is_null($value)) {
                $this->dimensions = Mapper::map($value, AssetDimensions::class);
            } else {
                return Mapper::map([], AssetDimensions::class);
            }
        }
        return $this->dimensions;
    }
                

    /**
     * @return string
     */
    public function getContentType(): string
    {
        if (is_null($this->contentType)) {
            $value = $this->raw('contentType');
            if (!is_null($value)) {
                $this->contentType = (string)$value;
            } else {
                return '';
            }
        }
        return $this->contentType;
    }
                
}
class AssetDimensions extends JsonObject {
    protected $w;
    protected $h;

    /**
     * @return float
     */
    public function getW(): float
    {
        if (is_null($this->w)) {
            $value = $this->raw('w');
            if (!is_null($value)) {
                $this->w = (float)$value;
            } else {
                return 0;
            }
        }
        return $this->w;
    }
                

    /**
     * @return float
     */
    public function getH(): float
    {
        if (is_null($this->h)) {
            $value = $this->raw('h');
            if (!is_null($value)) {
                $this->h = (float)$value;
            } else {
                return 0;
            }
        }
        return $this->h;
    }
                
}
class AssetDraft extends JsonObject {
    protected $sources;
    protected $name;
    protected $description;
    protected $tags;
    protected $custom;

    /**
     * @return AssetSourceCollection
     */
    public function getSources(): AssetSourceCollection
    {
        if (is_null($this->sources)) {
            $value = $this->raw('sources');
            if (!is_null($value)) {
                $this->sources = Mapper::map($value, AssetSourceCollection::class);
            } else {
                return Mapper::map([], AssetSourceCollection::class);
            }
        }
        return $this->sources;
    }
                

    /**
     * @return LocalizedString
     */
    public function getName(): LocalizedString
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->name;
    }
                

    /**
     * @return LocalizedString
     */
    public function getDescription(): LocalizedString
    {
        if (is_null($this->description)) {
            $value = $this->raw('description');
            if (!is_null($value)) {
                $this->description = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->description;
    }
                

    /**
     * @return array
     */
    public function getTags(): array
    {
        if (is_null($this->tags)) {
            $value = $this->raw('tags');
            if (!is_null($value)) {
                $this->tags = $value;
            } else {
                return [];
            }
        }
        return $this->tags;
    }
                

    /**
     * @return CustomFieldsDraft
     */
    public function getCustom(): CustomFieldsDraft
    {
        if (is_null($this->custom)) {
            $value = $this->raw('custom');
            if (!is_null($value)) {
                $this->custom = Mapper::map($value, CustomFieldsDraft::class);
            } else {
                return Mapper::map([], CustomFieldsDraft::class);
            }
        }
        return $this->custom;
    }
                
}
class PageQueryResponse extends JsonObject {
    protected $count;
    protected $total;
    protected $offset;
    protected $results;

    /**
     * @return int
     */
    public function getCount(): int
    {
        if (is_null($this->count)) {
            $value = $this->raw('count');
            if (!is_null($value)) {
                $this->count = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->count;
    }
                

    /**
     * @return int
     */
    public function getTotal(): int
    {
        if (is_null($this->total)) {
            $value = $this->raw('total');
            if (!is_null($value)) {
                $this->total = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->total;
    }
                

    /**
     * @return int
     */
    public function getOffset(): int
    {
        if (is_null($this->offset)) {
            $value = $this->raw('offset');
            if (!is_null($value)) {
                $this->offset = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->offset;
    }
                

    /**
     * @return Collection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw('results');
            if (!is_null($value)) {
                return Mapper::map($value, Collection::class);
            } else {
                return Mapper::map([], Collection::class);
            }
        }
        return $this->results;
    }
                
}
class CategoryPagedQueryResponse extends PageQueryResponse {
    protected $results;

    /**
     * @return CategoryCollection
     */
    public function getResults(): CategoryCollection
    {
        if (is_null($this->results)) {
            $value = $this->raw('results');
            if (!is_null($value)) {
                $this->results = Mapper::map($value, CategoryCollection::class);
            } else {
                return Mapper::map([], CategoryCollection::class);
            }
        }
        return $this->results;
    }
                
}
class Address extends JsonObject {
    protected $id;
    protected $title;
    protected $salutation;
    protected $firstName;
    protected $lastName;
    protected $streetName;
    protected $streetNumber;
    protected $additionalStreetInfo;
    protected $postalCode;
    protected $city;
    protected $region;
    protected $state;
    protected $country;
    protected $company;
    protected $department;
    protected $building;
    protected $apartment;
    protected $pOBox;
    protected $phone;
    protected $mobile;
    protected $email;
    protected $fax;
    protected $additionalAddressInfo;
    protected $externalId;

    /**
     * @return string
     */
    public function getId(): string
    {
        if (is_null($this->id)) {
            $value = $this->raw('id');
            if (!is_null($value)) {
                $this->id = (string)$value;
            } else {
                return '';
            }
        }
        return $this->id;
    }
                

    /**
     * @return string
     */
    public function getTitle(): string
    {
        if (is_null($this->title)) {
            $value = $this->raw('title');
            if (!is_null($value)) {
                $this->title = (string)$value;
            } else {
                return '';
            }
        }
        return $this->title;
    }
                

    /**
     * @return string
     */
    public function getSalutation(): string
    {
        if (is_null($this->salutation)) {
            $value = $this->raw('salutation');
            if (!is_null($value)) {
                $this->salutation = (string)$value;
            } else {
                return '';
            }
        }
        return $this->salutation;
    }
                

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        if (is_null($this->firstName)) {
            $value = $this->raw('firstName');
            if (!is_null($value)) {
                $this->firstName = (string)$value;
            } else {
                return '';
            }
        }
        return $this->firstName;
    }
                

    /**
     * @return string
     */
    public function getLastName(): string
    {
        if (is_null($this->lastName)) {
            $value = $this->raw('lastName');
            if (!is_null($value)) {
                $this->lastName = (string)$value;
            } else {
                return '';
            }
        }
        return $this->lastName;
    }
                

    /**
     * @return string
     */
    public function getStreetName(): string
    {
        if (is_null($this->streetName)) {
            $value = $this->raw('streetName');
            if (!is_null($value)) {
                $this->streetName = (string)$value;
            } else {
                return '';
            }
        }
        return $this->streetName;
    }
                

    /**
     * @return string
     */
    public function getStreetNumber(): string
    {
        if (is_null($this->streetNumber)) {
            $value = $this->raw('streetNumber');
            if (!is_null($value)) {
                $this->streetNumber = (string)$value;
            } else {
                return '';
            }
        }
        return $this->streetNumber;
    }
                

    /**
     * @return string
     */
    public function getAdditionalStreetInfo(): string
    {
        if (is_null($this->additionalStreetInfo)) {
            $value = $this->raw('additionalStreetInfo');
            if (!is_null($value)) {
                $this->additionalStreetInfo = (string)$value;
            } else {
                return '';
            }
        }
        return $this->additionalStreetInfo;
    }
                

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        if (is_null($this->postalCode)) {
            $value = $this->raw('postalCode');
            if (!is_null($value)) {
                $this->postalCode = (string)$value;
            } else {
                return '';
            }
        }
        return $this->postalCode;
    }
                

    /**
     * @return string
     */
    public function getCity(): string
    {
        if (is_null($this->city)) {
            $value = $this->raw('city');
            if (!is_null($value)) {
                $this->city = (string)$value;
            } else {
                return '';
            }
        }
        return $this->city;
    }
                

    /**
     * @return string
     */
    public function getRegion(): string
    {
        if (is_null($this->region)) {
            $value = $this->raw('region');
            if (!is_null($value)) {
                $this->region = (string)$value;
            } else {
                return '';
            }
        }
        return $this->region;
    }
                

    /**
     * @return string
     */
    public function getState(): string
    {
        if (is_null($this->state)) {
            $value = $this->raw('state');
            if (!is_null($value)) {
                $this->state = (string)$value;
            } else {
                return '';
            }
        }
        return $this->state;
    }
                

    /**
     * @return string
     */
    public function getCountry(): string
    {
        if (is_null($this->country)) {
            $value = $this->raw('country');
            if (!is_null($value)) {
                $this->country = (string)$value;
            } else {
                return '';
            }
        }
        return $this->country;
    }
                

    /**
     * @return string
     */
    public function getCompany(): string
    {
        if (is_null($this->company)) {
            $value = $this->raw('company');
            if (!is_null($value)) {
                $this->company = (string)$value;
            } else {
                return '';
            }
        }
        return $this->company;
    }
                

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        if (is_null($this->department)) {
            $value = $this->raw('department');
            if (!is_null($value)) {
                $this->department = (string)$value;
            } else {
                return '';
            }
        }
        return $this->department;
    }
                

    /**
     * @return string
     */
    public function getBuilding(): string
    {
        if (is_null($this->building)) {
            $value = $this->raw('building');
            if (!is_null($value)) {
                $this->building = (string)$value;
            } else {
                return '';
            }
        }
        return $this->building;
    }
                

    /**
     * @return string
     */
    public function getApartment(): string
    {
        if (is_null($this->apartment)) {
            $value = $this->raw('apartment');
            if (!is_null($value)) {
                $this->apartment = (string)$value;
            } else {
                return '';
            }
        }
        return $this->apartment;
    }
                

    /**
     * @return string
     */
    public function getPOBox(): string
    {
        if (is_null($this->pOBox)) {
            $value = $this->raw('pOBox');
            if (!is_null($value)) {
                $this->pOBox = (string)$value;
            } else {
                return '';
            }
        }
        return $this->pOBox;
    }
                

    /**
     * @return string
     */
    public function getPhone(): string
    {
        if (is_null($this->phone)) {
            $value = $this->raw('phone');
            if (!is_null($value)) {
                $this->phone = (string)$value;
            } else {
                return '';
            }
        }
        return $this->phone;
    }
                

    /**
     * @return string
     */
    public function getMobile(): string
    {
        if (is_null($this->mobile)) {
            $value = $this->raw('mobile');
            if (!is_null($value)) {
                $this->mobile = (string)$value;
            } else {
                return '';
            }
        }
        return $this->mobile;
    }
                

    /**
     * @return string
     */
    public function getEmail(): string
    {
        if (is_null($this->email)) {
            $value = $this->raw('email');
            if (!is_null($value)) {
                $this->email = (string)$value;
            } else {
                return '';
            }
        }
        return $this->email;
    }
                

    /**
     * @return string
     */
    public function getFax(): string
    {
        if (is_null($this->fax)) {
            $value = $this->raw('fax');
            if (!is_null($value)) {
                $this->fax = (string)$value;
            } else {
                return '';
            }
        }
        return $this->fax;
    }
                

    /**
     * @return string
     */
    public function getAdditionalAddressInfo(): string
    {
        if (is_null($this->additionalAddressInfo)) {
            $value = $this->raw('additionalAddressInfo');
            if (!is_null($value)) {
                $this->additionalAddressInfo = (string)$value;
            } else {
                return '';
            }
        }
        return $this->additionalAddressInfo;
    }
                

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        if (is_null($this->externalId)) {
            $value = $this->raw('externalId');
            if (!is_null($value)) {
                $this->externalId = (string)$value;
            } else {
                return '';
            }
        }
        return $this->externalId;
    }
                
}
class GeoJson extends JsonObject {
    protected $type;
    protected $coordinates;

    /**
     * @return string
     */
    public function getType(): string
    {
        if (is_null($this->type)) {
            $value = $this->raw('type');
            if (!is_null($value)) {
                $this->type = (string)$value;
            } else {
                return '';
            }
        }
        return $this->type;
    }
                

    /**
     * @return array
     */
    public function getCoordinates(): array
    {
        if (is_null($this->coordinates)) {
            $value = $this->raw('coordinates');
            if (!is_null($value)) {
                $this->coordinates = $value;
            } else {
                return [];
            }
        }
        return $this->coordinates;
    }
                
}
class GeoJsonPoint extends GeoJson {
}
class Channel extends Resource {
    protected $key;
    protected $roles;
    protected $name;
    protected $description;
    protected $address;
    protected $reviewRatingStatistics;
    protected $custom;
    protected $geoLocation;

    /**
     * @return string
     */
    public function getKey(): string
    {
        if (is_null($this->key)) {
            $value = $this->raw('key');
            if (!is_null($value)) {
                $this->key = (string)$value;
            } else {
                return '';
            }
        }
        return $this->key;
    }
                

    /**
     * @return array
     */
    public function getRoles(): array
    {
        if (is_null($this->roles)) {
            $value = $this->raw('roles');
            if (!is_null($value)) {
                $this->roles = $value;
            } else {
                return [];
            }
        }
        return $this->roles;
    }
                

    /**
     * @return LocalizedString
     */
    public function getName(): LocalizedString
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->name;
    }
                

    /**
     * @return LocalizedString
     */
    public function getDescription(): LocalizedString
    {
        if (is_null($this->description)) {
            $value = $this->raw('description');
            if (!is_null($value)) {
                $this->description = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->description;
    }
                

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        if (is_null($this->address)) {
            $value = $this->raw('address');
            if (!is_null($value)) {
                $this->address = Mapper::map($value, Address::class);
            } else {
                return Mapper::map([], Address::class);
            }
        }
        return $this->address;
    }
                

    /**
     * @return ReviewRatingStatistics
     */
    public function getReviewRatingStatistics(): ReviewRatingStatistics
    {
        if (is_null($this->reviewRatingStatistics)) {
            $value = $this->raw('reviewRatingStatistics');
            if (!is_null($value)) {
                $this->reviewRatingStatistics = Mapper::map($value, ReviewRatingStatistics::class);
            } else {
                return Mapper::map([], ReviewRatingStatistics::class);
            }
        }
        return $this->reviewRatingStatistics;
    }
                

    /**
     * @return CustomFields
     */
    public function getCustom(): CustomFields
    {
        if (is_null($this->custom)) {
            $value = $this->raw('custom');
            if (!is_null($value)) {
                $this->custom = Mapper::map($value, CustomFields::class);
            } else {
                return Mapper::map([], CustomFields::class);
            }
        }
        return $this->custom;
    }
                

    /**
     * @return array
     */
    public function getGeoLocation(): array
    {
        if (is_null($this->geoLocation)) {
            $value = $this->raw('geoLocation');
            if (!is_null($value)) {
                $this->geoLocation = $value;
            } else {
                return [];
            }
        }
        return $this->geoLocation;
    }
                
}
class ChannelDraft extends JsonObject {
    protected $key;
    protected $roles;
    protected $name;
    protected $description;
    protected $address;
    protected $custom;
    protected $geoLocation;

    /**
     * @return string
     */
    public function getKey(): string
    {
        if (is_null($this->key)) {
            $value = $this->raw('key');
            if (!is_null($value)) {
                $this->key = (string)$value;
            } else {
                return '';
            }
        }
        return $this->key;
    }
                

    /**
     * @return array
     */
    public function getRoles(): array
    {
        if (is_null($this->roles)) {
            $value = $this->raw('roles');
            if (!is_null($value)) {
                $this->roles = $value;
            } else {
                return [];
            }
        }
        return $this->roles;
    }
                

    /**
     * @return LocalizedString
     */
    public function getName(): LocalizedString
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->name;
    }
                

    /**
     * @return LocalizedString
     */
    public function getDescription(): LocalizedString
    {
        if (is_null($this->description)) {
            $value = $this->raw('description');
            if (!is_null($value)) {
                $this->description = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->description;
    }
                

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        if (is_null($this->address)) {
            $value = $this->raw('address');
            if (!is_null($value)) {
                $this->address = Mapper::map($value, Address::class);
            } else {
                return Mapper::map([], Address::class);
            }
        }
        return $this->address;
    }
                

    /**
     * @return CustomFields
     */
    public function getCustom(): CustomFields
    {
        if (is_null($this->custom)) {
            $value = $this->raw('custom');
            if (!is_null($value)) {
                $this->custom = Mapper::map($value, CustomFields::class);
            } else {
                return Mapper::map([], CustomFields::class);
            }
        }
        return $this->custom;
    }
                

    /**
     * @return array
     */
    public function getGeoLocation(): array
    {
        if (is_null($this->geoLocation)) {
            $value = $this->raw('geoLocation');
            if (!is_null($value)) {
                $this->geoLocation = $value;
            } else {
                return [];
            }
        }
        return $this->geoLocation;
    }
                
}
class ReviewRatingStatistics extends JsonObject {
    protected $averageRating;
    protected $highestRating;
    protected $lowestRating;
    protected $count;
    protected $ratingsDistribution;

    /**
     * @return float
     */
    public function getAverageRating(): float
    {
        if (is_null($this->averageRating)) {
            $value = $this->raw('averageRating');
            if (!is_null($value)) {
                $this->averageRating = (float)$value;
            } else {
                return 0;
            }
        }
        return $this->averageRating;
    }
                

    /**
     * @return float
     */
    public function getHighestRating(): float
    {
        if (is_null($this->highestRating)) {
            $value = $this->raw('highestRating');
            if (!is_null($value)) {
                $this->highestRating = (float)$value;
            } else {
                return 0;
            }
        }
        return $this->highestRating;
    }
                

    /**
     * @return float
     */
    public function getLowestRating(): float
    {
        if (is_null($this->lowestRating)) {
            $value = $this->raw('lowestRating');
            if (!is_null($value)) {
                $this->lowestRating = (float)$value;
            } else {
                return 0;
            }
        }
        return $this->lowestRating;
    }
                

    /**
     * @return int
     */
    public function getCount(): int
    {
        if (is_null($this->count)) {
            $value = $this->raw('count');
            if (!is_null($value)) {
                $this->count = (int)$value;
            } else {
                return 0;
            }
        }
        return $this->count;
    }
                

    /**
     * @return array
     */
    public function getRatingsDistribution(): array
    {
        if (is_null($this->ratingsDistribution)) {
            $value = $this->raw('ratingsDistribution');
            if (!is_null($value)) {
                $this->ratingsDistribution = $value;
            } else {
                return [];
            }
        }
        return $this->ratingsDistribution;
    }
                
}
class TypeReference extends Reference {
    protected $obj;

    /**
     * @return Type
     */
    public function getObj(): Type
    {
        if (is_null($this->obj)) {
            $value = $this->raw('obj');
            if (!is_null($value)) {
                $this->obj = Mapper::map($value, Type::class);
            } else {
                return Mapper::map([], Type::class);
            }
        }
        return $this->obj;
    }
                
}
class Type extends Resource {
    protected $key;
    protected $name;
    protected $description;
    protected $resourceTypeIds;
    protected $fieldDefinitions;

    /**
     * @return string
     */
    public function getKey(): string
    {
        if (is_null($this->key)) {
            $value = $this->raw('key');
            if (!is_null($value)) {
                $this->key = (string)$value;
            } else {
                return '';
            }
        }
        return $this->key;
    }
                

    /**
     * @return LocalizedString
     */
    public function getName(): LocalizedString
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->name;
    }
                

    /**
     * @return LocalizedString
     */
    public function getDescription(): LocalizedString
    {
        if (is_null($this->description)) {
            $value = $this->raw('description');
            if (!is_null($value)) {
                $this->description = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->description;
    }
                

    /**
     * @return array
     */
    public function getResourceTypeIds(): array
    {
        if (is_null($this->resourceTypeIds)) {
            $value = $this->raw('resourceTypeIds');
            if (!is_null($value)) {
                $this->resourceTypeIds = $value;
            } else {
                return [];
            }
        }
        return $this->resourceTypeIds;
    }
                

    /**
     * @return FieldDefinitionCollection
     */
    public function getFieldDefinitions(): FieldDefinitionCollection
    {
        if (is_null($this->fieldDefinitions)) {
            $value = $this->raw('fieldDefinitions');
            if (!is_null($value)) {
                $this->fieldDefinitions = Mapper::map($value, FieldDefinitionCollection::class);
            } else {
                return Mapper::map([], FieldDefinitionCollection::class);
            }
        }
        return $this->fieldDefinitions;
    }
                
}
class FieldDefinition extends JsonObject {
    protected $type;
    protected $name;
    protected $label;
    protected $required;
    protected $inputHint;

    /**
     * @return FieldType
     */
    public function getType(): FieldType
    {
        if (is_null($this->type)) {
            $value = $this->raw('type');
            if (!is_null($value)) {
                $this->type = Mapper::map($value, FieldType::class);
            } else {
                return Mapper::map([], FieldType::class);
            }
        }
        return $this->type;
    }
                

    /**
     * @return string
     */
    public function getName(): string
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = (string)$value;
            } else {
                return '';
            }
        }
        return $this->name;
    }
                

    /**
     * @return LocalizedString
     */
    public function getLabel(): LocalizedString
    {
        if (is_null($this->label)) {
            $value = $this->raw('label');
            if (!is_null($value)) {
                $this->label = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->label;
    }
                

    /**
     * @return bool
     */
    public function getRequired(): bool
    {
        if (is_null($this->required)) {
            $value = $this->raw('required');
            if (!is_null($value)) {
                $this->required = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->required;
    }
                

    /**
     * @return string
     */
    public function getInputHint(): string
    {
        if (is_null($this->inputHint)) {
            $value = $this->raw('inputHint');
            if (!is_null($value)) {
                $this->inputHint = (string)$value;
            } else {
                return '';
            }
        }
        return $this->inputHint;
    }
                
}
class FieldType extends JsonObject {
    protected $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = (string)$value;
            } else {
                return '';
            }
        }
        return $this->name;
    }
                
}
class CategoryCollection extends Collection {

    /**
     * @param $index
     * @return Category|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new Category($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return Category|null
     */
    public function current()
    {
        return parent::current();
    }
}
class ReferenceCollection extends Collection {

    /**
     * @param $index
     * @return Reference|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new Reference($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return Reference|null
     */
    public function current()
    {
        return parent::current();
    }
}
class CategoryReferenceCollection extends Collection {

    /**
     * @param $index
     * @return CategoryReference|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new CategoryReference($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return CategoryReference|null
     */
    public function current()
    {
        return parent::current();
    }
}
class CustomFieldsCollection extends Collection {

    /**
     * @param $index
     * @return CustomFields|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new CustomFields($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return CustomFields|null
     */
    public function current()
    {
        return parent::current();
    }
}
class AssetCollection extends Collection {

    /**
     * @param $index
     * @return Asset|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new Asset($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return Asset|null
     */
    public function current()
    {
        return parent::current();
    }
}
class AssetSourceCollection extends Collection {

    /**
     * @param $index
     * @return AssetSource|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new AssetSource($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return AssetSource|null
     */
    public function current()
    {
        return parent::current();
    }
}
class AssetDraftCollection extends Collection {

    /**
     * @param $index
     * @return AssetDraft|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new AssetDraft($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return AssetDraft|null
     */
    public function current()
    {
        return parent::current();
    }
}
class AddressCollection extends Collection {

    /**
     * @param $index
     * @return Address|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new Address($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return Address|null
     */
    public function current()
    {
        return parent::current();
    }
}
class ChannelCollection extends Collection {

    /**
     * @param $index
     * @return Channel|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new Channel($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return Channel|null
     */
    public function current()
    {
        return parent::current();
    }
}
class TypeReferenceCollection extends Collection {

    /**
     * @param $index
     * @return TypeReference|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new TypeReference($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return TypeReference|null
     */
    public function current()
    {
        return parent::current();
    }
}
class TypeCollection extends Collection {

    /**
     * @param $index
     * @return Type|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new Type($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return Type|null
     */
    public function current()
    {
        return parent::current();
    }
}
class FieldDefinitionCollection extends Collection {

    /**
     * @param $index
     * @return FieldDefinition|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new FieldDefinition($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return FieldDefinition|null
     */
    public function current()
    {
        return parent::current();
    }
}

class Mapper
{
    private static $instance;
   
    private $generator; 
    
    
    private static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    private function getHydrator($className)
    {
        if (is_null($this->generator)) {
            $this->setGenerator(function ($className) {
                $generator = new HydratorGenerator();
                $hydratorClass = $generator->getHydratorClass($className);
                return new $hydratorClass();
            });
        }
        $generator = $this->generator;
        return $generator($className);
    }
    
    public function setGenerator(callable $fn)
    {
        $this->generator = $fn;
    }
    
    public function mapToClass($value, $className)
    {
        if (!is_null($className)) {
            $hydrator = $this->getHydrator($className);
            $object = new $className();
            $hydrator->hydrate($value, $object);
        } else {
            $object = $value;
        }
        
        return $object;
    }
    
    public static function map($value, $className)
    {
        return self::getInstance()->mapToClass($value, $className);
    }
}

class HydratorGenerator {
    protected static $types = [
       Resource::class => Resource::class,
       Category::class => Category::class,
       CategoryCollection::class => CategoryCollection::class,
       CategoryDraft::class => CategoryDraft::class,
       LocalizedString::class => LocalizedString::class,
       Reference::class => Reference::class,
       ReferenceCollection::class => ReferenceCollection::class,
       CategoryReference::class => CategoryReference::class,
       CategoryReferenceCollection::class => CategoryReferenceCollection::class,
       CustomFields::class => CustomFields::class,
       CustomFieldsCollection::class => CustomFieldsCollection::class,
       CustomFieldsDraft::class => CustomFieldsDraft::class,
       Asset::class => Asset::class,
       AssetCollection::class => AssetCollection::class,
       AssetSource::class => AssetSource::class,
       AssetSourceCollection::class => AssetSourceCollection::class,
       AssetDimensions::class => AssetDimensions::class,
       AssetDraft::class => AssetDraft::class,
       AssetDraftCollection::class => AssetDraftCollection::class,
       PageQueryResponse::class => PageQueryResponse::class,
       CategoryPagedQueryResponse::class => CategoryPagedQueryResponse::class,
       Address::class => Address::class,
       AddressCollection::class => AddressCollection::class,
       GeoJson::class => GeoJson::class,
       GeoJsonPoint::class => GeoJsonPoint::class,
       Channel::class => Channel::class,
       ChannelCollection::class => ChannelCollection::class,
       ChannelDraft::class => ChannelDraft::class,
       ReviewRatingStatistics::class => ReviewRatingStatistics::class,
       TypeReference::class => TypeReference::class,
       TypeReferenceCollection::class => TypeReferenceCollection::class,
       Type::class => Type::class,
       TypeCollection::class => TypeCollection::class,
       FieldDefinition::class => FieldDefinition::class,
       FieldDefinitionCollection::class => FieldDefinitionCollection::class,
       FieldType::class => FieldType::class,
    ];
        
    public function getHydratorClass($className)
    {
        $hydratorClass = null;
        if (isset(self::$types[$className])) {
            $hydratorClass = self::$types[$className];
        }
        return $hydratorClass;
    }
}
