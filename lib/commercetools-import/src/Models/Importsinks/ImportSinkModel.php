<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

final class ImportSinkModel extends JsonObjectModel implements ImportSink
{
    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     * @var ?Predicate
     */
    protected $skipPredicate;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $resourceType;

    public function __construct(
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        Predicate $skipPredicate = null,
        int $version = null,
        string $key = null,
        string $resourceType = null
    ) {
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->skipPredicate = $skipPredicate;
        $this->version = $version;
        $this->key = $key;
        $this->resourceType = $resourceType;
    }

    /**
     * <p>The creation time of this import sink.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportSink::FIELD_CREATED_AT);
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
     * <p>The last modification time of this import sink.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportSink::FIELD_LAST_MODIFIED_AT);
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
     * <p>A predicate allows to check the current state of a CTP resource. And can be used to detect if an import should
     * be performed or should be skipped. And this abstract type allows us to support different syntaxes for our predicates
     * without any breaking changes to our api.</p>.
     *
     * @return null|Predicate
     */
    public function getSkipPredicate()
    {
        if (is_null($this->skipPredicate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ImportSink::FIELD_SKIP_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $className = PredicateModel::resolveDiscriminatorClass($data);
            $this->skipPredicate = $className::of($data);
        }

        return $this->skipPredicate;
    }

    /**
     * <p>The version of this resource.</p>.
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ImportSink::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>The key of import sink.</p>.
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportSink::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>The type of the import resource sent to this import sink.</p>.
     *
     * @return null|string
     */
    public function getResourceType()
    {
        if (is_null($this->resourceType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportSink::FIELD_RESOURCE_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->resourceType = (string) $data;
        }

        return $this->resourceType;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    public function setSkipPredicate(?Predicate $skipPredicate): void
    {
        $this->skipPredicate = $skipPredicate;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setResourceType(?string $resourceType): void
    {
        $this->resourceType = $resourceType;
    }

    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ImportSink::FIELD_CREATED_AT]) && $data[ImportSink::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[ImportSink::FIELD_CREATED_AT] = $data[ImportSink::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[ImportSink::FIELD_LAST_MODIFIED_AT]) && $data[ImportSink::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[ImportSink::FIELD_LAST_MODIFIED_AT] = $data[ImportSink::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        return (object) $data;
    }
}
