<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use DateTimeImmutable;

/**
 * @implements Builder<ImportSink>
 */
final class ImportSinkBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?string
     */
    private $resourceType;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**
     * <p>The unique key of the import sink.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The type of import resource sent to this import sink.
     * You can only send one resource type per import sink.</p>
     *
     * @return null|string
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * <p>The version of this resource.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>When the import sink was created.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>When the import sink was modified.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResourceType(?string $resourceType)
    {
        $this->resourceType = $resourceType;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }


    public function build(): ImportSink
    {
        return new ImportSinkModel(
            $this->key,
            $this->resourceType,
            $this->version,
            $this->createdAt,
            $this->lastModifiedAt
        );
    }

    public static function of(): ImportSinkBuilder
    {
        return new self();
    }
}
