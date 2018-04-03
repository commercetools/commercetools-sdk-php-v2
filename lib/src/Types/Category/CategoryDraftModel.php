<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Category;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Type\CustomFieldsDraft;
use Commercetools\Types\Common\AssetDraft;
use Commercetools\Types\Common\AssetDraftCollection;

class CategoryDraftModel extends JsonObjectModel implements CategoryDraft {
    /**
     * @var LocalizedString
     */
    protected $name;
    /**
     * @var LocalizedString
     */
    protected $slug;
    /**
     * @var LocalizedString
     */
    protected $description;
    /**
     * @var CategoryReference
     */
    protected $parent;
    /**
     * @var string
     */
    protected $orderHint;
    /**
     * @var string
     */
    protected $externalId;
    /**
     * @var LocalizedString
     */
    protected $metaTitle;
    /**
     * @var LocalizedString
     */
    protected $metaDescription;
    /**
     * @var LocalizedString
     */
    protected $metaKeywords;
    /**
     * @var CustomFieldsDraft
     */
    protected $custom;
    /**
     * @var AssetDraftCollection
     */
    protected $assets;
    /**
     * @var string
     */
    protected $key;

    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(CategoryDraft::FIELD_NAME);
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
    public function getSlug()
    {
        if (is_null($this->slug)) {
            $value = $this->raw(CategoryDraft::FIELD_SLUG);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->slug = $value;
        }
        return $this->slug;
    }
    /**
     * @return LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            $value = $this->raw(CategoryDraft::FIELD_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return CategoryReference
     */
    public function getParent()
    {
        if (is_null($this->parent)) {
            $value = $this->raw(CategoryDraft::FIELD_PARENT);
            if (is_null($value)) {
                return $this->mapData(CategoryReference::class, null);
            }
            $value = $this->mapData(CategoryReference::class, $value);

            $this->parent = $value;
        }
        return $this->parent;
    }
    /**
     * @return string
     */
    public function getOrderHint()
    {
        if (is_null($this->orderHint)) {
            $value = $this->raw(CategoryDraft::FIELD_ORDER_HINT);
            $value = (string)$value;
            $this->orderHint = $value;
        }
        return $this->orderHint;
    }
    /**
     * @return string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            $value = $this->raw(CategoryDraft::FIELD_EXTERNAL_ID);
            $value = (string)$value;
            $this->externalId = $value;
        }
        return $this->externalId;
    }
    /**
     * @return LocalizedString
     */
    public function getMetaTitle()
    {
        if (is_null($this->metaTitle)) {
            $value = $this->raw(CategoryDraft::FIELD_META_TITLE);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->metaTitle = $value;
        }
        return $this->metaTitle;
    }
    /**
     * @return LocalizedString
     */
    public function getMetaDescription()
    {
        if (is_null($this->metaDescription)) {
            $value = $this->raw(CategoryDraft::FIELD_META_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->metaDescription = $value;
        }
        return $this->metaDescription;
    }
    /**
     * @return LocalizedString
     */
    public function getMetaKeywords()
    {
        if (is_null($this->metaKeywords)) {
            $value = $this->raw(CategoryDraft::FIELD_META_KEYWORDS);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->metaKeywords = $value;
        }
        return $this->metaKeywords;
    }
    /**
     * @return CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(CategoryDraft::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFieldsDraft::class, null);
            }
            $value = $this->mapData(CustomFieldsDraft::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }
    /**
     * @return AssetDraftCollection
     */
    public function getAssets()
    {
        if (is_null($this->assets)) {
            $value = $this->raw(CategoryDraft::FIELD_ASSETS);
            if (is_null($value)) {
                return $this->mapData(AssetDraftCollection::class, null);
            }
            $value = $this->mapData(AssetDraftCollection::class, $value);
            $this->assets = $value;
        }
        return $this->assets;
    }
    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(CategoryDraft::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
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
     * @param LocalizedString $slug
     * @return $this
     */
    public function setSlug(LocalizedString $slug)
    {
        $this->slug = $slug;

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
     * @param CategoryReference $parent
     * @return $this
     */
    public function setParent(CategoryReference $parent)
    {
        $this->parent = $parent;

        return $this;
    }
    /**
     * @param string $orderHint
     * @return $this
     */
    public function setOrderHint(string $orderHint)
    {
        $this->orderHint = (string)$orderHint;

        return $this;
    }
    /**
     * @param string $externalId
     * @return $this
     */
    public function setExternalId(string $externalId)
    {
        $this->externalId = (string)$externalId;

        return $this;
    }
    /**
     * @param LocalizedString $metaTitle
     * @return $this
     */
    public function setMetaTitle(LocalizedString $metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }
    /**
     * @param LocalizedString $metaDescription
     * @return $this
     */
    public function setMetaDescription(LocalizedString $metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }
    /**
     * @param LocalizedString $metaKeywords
     * @return $this
     */
    public function setMetaKeywords(LocalizedString $metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

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
     * @param AssetDraftCollection $assets
     * @return $this
     */
    public function setAssets(AssetDraftCollection $assets)
    {
        $this->assets = $assets;

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
