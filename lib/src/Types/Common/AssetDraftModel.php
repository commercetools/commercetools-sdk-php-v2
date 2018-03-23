<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Type\CustomFieldsDraft;

class AssetDraftModel extends JsonObjectModel implements AssetDraft {
    /**
     * @var AssetSourceCollection
     */
    protected $sources;
    /**
     * @var LocalizedString
     */
    protected $name;
    /**
     * @var LocalizedString
     */
    protected $description;
    /**
     * @var array
     */
    protected $tags;
    /**
     * @var CustomFieldsDraft
     */
    protected $custom;
    /**
     * @var string
     */
    protected $key;

    /**
     * @return AssetSourceCollection
     */
    public function getSources()
    {
        if (is_null($this->sources)) {
            $value = $this->raw(AssetDraft::FIELD_SOURCES);
            if (is_null($value)) {
                return $this->mapData(AssetSourceCollection::class, null);
            }
            $value = $this->mapData(AssetSourceCollection::class, $value);
            $this->sources = $value;
        }
        return $this->sources;
    }
    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(AssetDraft::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            $value = $this->raw(AssetDraft::FIELD_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return array
     */
    public function getTags()
    {
        if (is_null($this->tags)) {
            $value = $this->raw(AssetDraft::FIELD_TAGS);
            $this->tags = $value;
        }
        return $this->tags;
    }
    /**
     * @return CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(AssetDraft::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFieldsDraft::class, null);
            }
            $value = $this->mapData(CustomFieldsDraft::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }
    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(AssetDraft::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }

    /**
     * @param AssetSourceCollection $sources
     * @return $this
     */
    public function setSources(AssetSourceCollection $sources)
    {
        $this->sources = $sources;

        return $this;
    }
    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }
    /**
     * @param $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }
    /**
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }
    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }

}
