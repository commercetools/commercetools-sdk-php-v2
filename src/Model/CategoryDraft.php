<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

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
