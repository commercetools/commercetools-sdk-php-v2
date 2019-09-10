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

use Commercetools\Api\Models\Common\AssetDraftCollection;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;

final class CategoryDraftModel extends JsonObjectModel implements CategoryDraft
{
    
    public function __construct(
        CategoryResourceIdentifier $parent = null,
        AssetDraftCollection $assets = null,
        LocalizedString $metaKeywords = null,
        string $orderHint = null,
        CustomFieldsDraft $custom = null,
        LocalizedString $metaTitle = null,
        LocalizedString $name = null,
        string $externalId = null,
        LocalizedString $description = null,
        LocalizedString $metaDescription = null,
        string $key = null,
        LocalizedString $slug = null
    ) {
        $this->parent = $parent;
        $this->assets = $assets;
        $this->metaKeywords = $metaKeywords;
        $this->orderHint = $orderHint;
        $this->custom = $custom;
        $this->metaTitle = $metaTitle;
        $this->name = $name;
        $this->externalId = $externalId;
        $this->description = $description;
        $this->metaDescription = $metaDescription;
        $this->key = $key;
        $this->slug = $slug;
        
    }

    /**
     * @var ?CategoryResourceIdentifier
     */
    protected $parent;
    
    /**
     * @var ?AssetDraftCollection
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
     * @var ?CustomFieldsDraft
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
     * @return CategoryResourceIdentifier|null
     */
    final public function getParent()
    {
       if (is_null($this->parent)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CategoryDraft::FIELD_PARENT);
           if (is_null($data)) {
               return null;
           }
           
           $this->parent = CategoryResourceIdentifierModel::of($data);
       }
       return $this->parent;
    }
    
    /**
     *
     * @return AssetDraftCollection|null
     */
    final public function getAssets()
    {
       if (is_null($this->assets)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(CategoryDraft::FIELD_ASSETS);
           if (is_null($data)) {
               return null;
           }
           $this->assets = AssetDraftCollection::fromArray($data);
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
           $data = $this->raw(CategoryDraft::FIELD_META_KEYWORDS);
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
           $data = $this->raw(CategoryDraft::FIELD_ORDER_HINT);
           if (is_null($data)) {
               return null;
           }
           $this->orderHint = (string)$data;
       }
       return $this->orderHint;
    }
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CategoryDraft::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsDraftModel::of($data);
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
           $data = $this->raw(CategoryDraft::FIELD_META_TITLE);
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
           $data = $this->raw(CategoryDraft::FIELD_NAME);
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
           $data = $this->raw(CategoryDraft::FIELD_EXTERNAL_ID);
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
           $data = $this->raw(CategoryDraft::FIELD_DESCRIPTION);
           if (is_null($data)) {
               return null;
           }
           
           $this->description = LocalizedStringModel::of($data);
       }
       return $this->description;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getMetaDescription()
    {
       if (is_null($this->metaDescription)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CategoryDraft::FIELD_META_DESCRIPTION);
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
           $data = $this->raw(CategoryDraft::FIELD_KEY);
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
           $data = $this->raw(CategoryDraft::FIELD_SLUG);
           if (is_null($data)) {
               return null;
           }
           
           $this->slug = LocalizedStringModel::of($data);
       }
       return $this->slug;
    }
    final public function setParent(?CategoryResourceIdentifier $parent): void
    {
        $this->parent = $parent;
    }
    
    final public function setAssets(?AssetDraftCollection $assets): void
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
    
    final public function setCustom(?CustomFieldsDraft $custom): void
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
    
}