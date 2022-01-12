<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Api\Models\Common\AssetCollection;
use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class CategoryModel extends JsonObjectModel implements Category
{
    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?LocalizedString
     */
    protected $slug;

    /**
     * @var ?LocalizedString
     */
    protected $description;

    /**
     * @var ?CategoryReferenceCollection
     */
    protected $ancestors;

    /**
     * @var ?CategoryReference
     */
    protected $parent;

    /**
     * @var ?string
     */
    protected $orderHint;

    /**
     * @var ?string
     */
    protected $externalId;

    /**
     * @var ?LocalizedString
     */
    protected $metaTitle;

    /**
     * @var ?LocalizedString
     */
    protected $metaDescription;

    /**
     * @var ?LocalizedString
     */
    protected $metaKeywords;

    /**
     * @var ?CustomFields
     */
    protected $custom;

    /**
     * @var ?AssetCollection
     */
    protected $assets;

    /**
     * @var ?string
     */
    protected $key;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?int $version = null,
        ?DateTimeImmutable $createdAt = null,
        ?DateTimeImmutable $lastModifiedAt = null,
        ?LastModifiedBy $lastModifiedBy = null,
        ?CreatedBy $createdBy = null,
        ?LocalizedString $name = null,
        ?LocalizedString $slug = null,
        ?LocalizedString $description = null,
        ?CategoryReferenceCollection $ancestors = null,
        ?CategoryReference $parent = null,
        ?string $orderHint = null,
        ?string $externalId = null,
        ?LocalizedString $metaTitle = null,
        ?LocalizedString $metaDescription = null,
        ?LocalizedString $metaKeywords = null,
        ?CustomFields $custom = null,
        ?AssetCollection $assets = null,
        ?string $key = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->name = $name;
        $this->slug = $slug;
        $this->description = $description;
        $this->ancestors = $ancestors;
        $this->parent = $parent;
        $this->orderHint = $orderHint;
        $this->externalId = $externalId;
        $this->metaTitle = $metaTitle;
        $this->metaDescription = $metaDescription;
        $this->metaKeywords = $metaKeywords;
        $this->custom = $custom;
        $this->assets = $assets;
        $this->key = $key;
    }

    /**
     * <p>The unique ID of the category.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>The current version of the category.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources updated after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1 February 2019 except for <a href="/client-logging#events-tracked">events not tracked</a>.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * <p>human-readable identifiers usually used as deep-link URL to the related category.
     * Each slug is unique across a project, but a category can have the same slug for different languages.</p>
     *
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }

            $this->slug = LocalizedStringModel::of($data);
        }

        return $this->slug;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * <p>Contains the parent path towards the root category.</p>
     *
     * @return null|CategoryReferenceCollection
     */
    public function getAncestors()
    {
        if (is_null($this->ancestors)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ANCESTORS);
            if (is_null($data)) {
                return null;
            }
            $this->ancestors = CategoryReferenceCollection::fromArray($data);
        }

        return $this->ancestors;
    }

    /**
     * <p>A category that is the parent of this category in the category tree.</p>
     *
     * @return null|CategoryReference
     */
    public function getParent()
    {
        if (is_null($this->parent)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PARENT);
            if (is_null($data)) {
                return null;
            }

            $this->parent = CategoryReferenceModel::of($data);
        }

        return $this->parent;
    }

    /**
     * <p>An attribute as base for a custom category order in one level.</p>
     *
     * @return null|string
     */
    public function getOrderHint()
    {
        if (is_null($this->orderHint)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORDER_HINT);
            if (is_null($data)) {
                return null;
            }
            $this->orderHint = (string) $data;
        }

        return $this->orderHint;
    }

    /**
     * @return null|string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_EXTERNAL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->externalId = (string) $data;
        }

        return $this->externalId;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaTitle()
    {
        if (is_null($this->metaTitle)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_META_TITLE);
            if (is_null($data)) {
                return null;
            }

            $this->metaTitle = LocalizedStringModel::of($data);
        }

        return $this->metaTitle;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaDescription()
    {
        if (is_null($this->metaDescription)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_META_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->metaDescription = LocalizedStringModel::of($data);
        }

        return $this->metaDescription;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaKeywords()
    {
        if (is_null($this->metaKeywords)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_META_KEYWORDS);
            if (is_null($data)) {
                return null;
            }

            $this->metaKeywords = LocalizedStringModel::of($data);
        }

        return $this->metaKeywords;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p>Can be used to store images, icons or movies related to this category.</p>
     *
     * @return null|AssetCollection
     */
    public function getAssets()
    {
        if (is_null($this->assets)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ASSETS);
            if (is_null($data)) {
                return null;
            }
            $this->assets = AssetCollection::fromArray($data);
        }

        return $this->assets;
    }

    /**
     * <p>User-specific unique identifier for the category.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     */
    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    /**
     * @param ?LastModifiedBy $lastModifiedBy
     */
    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    /**
     * @param ?CreatedBy $createdBy
     */
    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?CategoryReferenceCollection $ancestors
     */
    public function setAncestors(?CategoryReferenceCollection $ancestors): void
    {
        $this->ancestors = $ancestors;
    }

    /**
     * @param ?CategoryReference $parent
     */
    public function setParent(?CategoryReference $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @param ?string $orderHint
     */
    public function setOrderHint(?string $orderHint): void
    {
        $this->orderHint = $orderHint;
    }

    /**
     * @param ?string $externalId
     */
    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }

    /**
     * @param ?LocalizedString $metaTitle
     */
    public function setMetaTitle(?LocalizedString $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }

    /**
     * @param ?LocalizedString $metaDescription
     */
    public function setMetaDescription(?LocalizedString $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }

    /**
     * @param ?LocalizedString $metaKeywords
     */
    public function setMetaKeywords(?LocalizedString $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?AssetCollection $assets
     */
    public function setAssets(?AssetCollection $assets): void
    {
        $this->assets = $assets;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Category::FIELD_CREATED_AT]) && $data[Category::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Category::FIELD_CREATED_AT] = $data[Category::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Category::FIELD_LAST_MODIFIED_AT]) && $data[Category::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[Category::FIELD_LAST_MODIFIED_AT] = $data[Category::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
