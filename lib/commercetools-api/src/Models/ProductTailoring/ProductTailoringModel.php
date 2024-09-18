<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;
use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceModel;
use Commercetools\Api\Models\Store\StoreKeyReference;
use Commercetools\Api\Models\Store\StoreKeyReferenceModel;
use Commercetools\Api\Models\Warning\WarningObjectCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class ProductTailoringModel extends JsonObjectModel implements ProductTailoring
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     *
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     *
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?StoreKeyReference
     */
    protected $store;

    /**
     *
     * @var ?ProductReference
     */
    protected $product;

    /**
     *
     * @var ?bool
     */
    protected $published;

    /**
     *
     * @var ?ProductTailoringData
     */
    protected $current;

    /**
     *
     * @var ?ProductTailoringData
     */
    protected $staged;

    /**
     *
     * @var ?bool
     */
    protected $hasStagedChanges;

    /**
     *
     * @var ?WarningObjectCollection
     */
    protected $warnings;


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
        ?string $key = null,
        ?StoreKeyReference $store = null,
        ?ProductReference $product = null,
        ?bool $published = null,
        ?ProductTailoringData $current = null,
        ?ProductTailoringData $staged = null,
        ?bool $hasStagedChanges = null,
        ?WarningObjectCollection $warnings = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->key = $key;
        $this->store = $store;
        $this->product = $product;
        $this->published = $published;
        $this->current = $current;
        $this->staged = $staged;
        $this->hasStagedChanges = $hasStagedChanges;
        $this->warnings = $warnings;
    }

    /**
     * <p>Unique identifier of the ProductTailoring.</p>
     *
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
     * <p>Current version of the ProductTailoring.</p>
     *
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
     * <p>Date and time (UTC) the ProductTailoring was initially created.</p>
     *
     *
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
     * <p>Date and time (UTC) the ProductTailoring was last updated.</p>
     *
     *
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
     * <p>IDs and references that last modified the ProductTailoring.</p>
     *
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
     * <p>IDs and references that created the ProductTailoring.</p>
     *
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
     * <p>User-defined unique identifier of the ProductTailoring.</p>
     *
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
     * <p>The Store to which the ProductTailoring belongs.</p>
     *
     *
     * @return null|StoreKeyReference
     */
    public function getStore()
    {
        if (is_null($this->store)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STORE);
            if (is_null($data)) {
                return null;
            }

            $this->store = StoreKeyReferenceModel::of($data);
        }

        return $this->store;
    }

    /**
     * <p>Reference to the Product the ProductTailoring belongs to.</p>
     *
     *
     * @return null|ProductReference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product = ProductReferenceModel::of($data);
        }

        return $this->product;
    }

    /**
     * <p><code>true</code> if the ProductTailoring is published.</p>
     *
     *
     * @return null|bool
     */
    public function getPublished()
    {
        if (is_null($this->published)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_PUBLISHED);
            if (is_null($data)) {
                return null;
            }
            $this->published = (bool) $data;
        }

        return $this->published;
    }

    /**
     * <p>Current (published) data of the ProductTailoring.</p>
     *
     *
     * @return null|ProductTailoringData
     */
    public function getCurrent()
    {
        if (is_null($this->current)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CURRENT);
            if (is_null($data)) {
                return null;
            }

            $this->current = ProductTailoringDataModel::of($data);
        }

        return $this->current;
    }

    /**
     * <p>Staged (unpublished) data of the ProductTailoring.</p>
     *
     *
     * @return null|ProductTailoringData
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }

            $this->staged = ProductTailoringDataModel::of($data);
        }

        return $this->staged;
    }

    /**
     * <p><code>true</code> if the <code>staged</code> data is different from the <code>current</code> data.</p>
     *
     *
     * @return null|bool
     */
    public function getHasStagedChanges()
    {
        if (is_null($this->hasStagedChanges)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_HAS_STAGED_CHANGES);
            if (is_null($data)) {
                return null;
            }
            $this->hasStagedChanges = (bool) $data;
        }

        return $this->hasStagedChanges;
    }

    /**
     * <p>Warnings about processing of a request.
     * Appears in response to requests with response status code <code>202 Accepted</code>.</p>
     *
     *
     * @return null|WarningObjectCollection
     */
    public function getWarnings()
    {
        if (is_null($this->warnings)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_WARNINGS);
            if (is_null($data)) {
                return null;
            }
            $this->warnings = WarningObjectCollection::fromArray($data);
        }

        return $this->warnings;
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
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?StoreKeyReference $store
     */
    public function setStore(?StoreKeyReference $store): void
    {
        $this->store = $store;
    }

    /**
     * @param ?ProductReference $product
     */
    public function setProduct(?ProductReference $product): void
    {
        $this->product = $product;
    }

    /**
     * @param ?bool $published
     */
    public function setPublished(?bool $published): void
    {
        $this->published = $published;
    }

    /**
     * @param ?ProductTailoringData $current
     */
    public function setCurrent(?ProductTailoringData $current): void
    {
        $this->current = $current;
    }

    /**
     * @param ?ProductTailoringData $staged
     */
    public function setStaged(?ProductTailoringData $staged): void
    {
        $this->staged = $staged;
    }

    /**
     * @param ?bool $hasStagedChanges
     */
    public function setHasStagedChanges(?bool $hasStagedChanges): void
    {
        $this->hasStagedChanges = $hasStagedChanges;
    }

    /**
     * @param ?WarningObjectCollection $warnings
     */
    public function setWarnings(?WarningObjectCollection $warnings): void
    {
        $this->warnings = $warnings;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ProductTailoring::FIELD_CREATED_AT]) && $data[ProductTailoring::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[ProductTailoring::FIELD_CREATED_AT] = $data[ProductTailoring::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[ProductTailoring::FIELD_LAST_MODIFIED_AT]) && $data[ProductTailoring::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[ProductTailoring::FIELD_LAST_MODIFIED_AT] = $data[ProductTailoring::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
