<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

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
