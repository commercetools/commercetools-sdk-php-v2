<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Categories;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Import\Models\Common\AssetCollection;
use Commercetools\Import\Models\Common\ImportReference;
use Commercetools\Import\Models\Common\ImportReferenceModel;
use Commercetools\Import\Models\Common\ImportResource;
use Commercetools\Import\Models\Common\LocalizedString;
use Commercetools\Import\Models\Common\LocalizedStringModel;
use stdClass;

final class CategoryImportModel extends JsonObjectModel implements CategoryImport
{
    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?ImportReference
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
     * @var ?LocalizedString
     */
    protected $slug;

    public function __construct(
        string $key = null,
        ImportReference $parent = null,
        AssetCollection $assets = null,
        LocalizedString $metaKeywords = null,
        string $orderHint = null,
        LocalizedString $metaTitle = null,
        LocalizedString $name = null,
        string $externalId = null,
        LocalizedString $description = null,
        LocalizedString $metaDescription = null,
        LocalizedString $slug = null
    ) {
        $this->key = $key;
        $this->parent = $parent;
        $this->assets = $assets;
        $this->metaKeywords = $metaKeywords;
        $this->orderHint = $orderHint;
        $this->metaTitle = $metaTitle;
        $this->name = $name;
        $this->externalId = $externalId;
        $this->description = $description;
        $this->metaDescription = $metaDescription;
        $this->slug = $slug;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportResource::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getParent()
    {
        if (is_null($this->parent)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CategoryImport::FIELD_PARENT);
            if (is_null($data)) {
                return null;
            }

            $this->parent = ImportReferenceModel::of($data);
        }

        return $this->parent;
    }

    /**
     * @return null|AssetCollection
     */
    public function getAssets()
    {
        if (is_null($this->assets)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(CategoryImport::FIELD_ASSETS);
            if (is_null($data)) {
                return null;
            }
            $this->assets = AssetCollection::fromArray($data);
        }

        return $this->assets;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaKeywords()
    {
        if (is_null($this->metaKeywords)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CategoryImport::FIELD_META_KEYWORDS);
            if (is_null($data)) {
                return null;
            }

            $this->metaKeywords = LocalizedStringModel::of($data);
        }

        return $this->metaKeywords;
    }

    /**
     * @return null|string
     */
    public function getOrderHint()
    {
        if (is_null($this->orderHint)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CategoryImport::FIELD_ORDER_HINT);
            if (is_null($data)) {
                return null;
            }
            $this->orderHint = (string) $data;
        }

        return $this->orderHint;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaTitle()
    {
        if (is_null($this->metaTitle)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CategoryImport::FIELD_META_TITLE);
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
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CategoryImport::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CategoryImport::FIELD_EXTERNAL_ID);
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
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CategoryImport::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * @return null|LocalizedString
     */
    public function getMetaDescription()
    {
        if (is_null($this->metaDescription)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CategoryImport::FIELD_META_DESCRIPTION);
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
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CategoryImport::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }

            $this->slug = LocalizedStringModel::of($data);
        }

        return $this->slug;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setParent(?ImportReference $parent): void
    {
        $this->parent = $parent;
    }

    public function setAssets(?AssetCollection $assets): void
    {
        $this->assets = $assets;
    }

    public function setMetaKeywords(?LocalizedString $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }

    public function setOrderHint(?string $orderHint): void
    {
        $this->orderHint = $orderHint;
    }

    public function setMetaTitle(?LocalizedString $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }

    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }

    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    public function setMetaDescription(?LocalizedString $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }

    public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }
}
