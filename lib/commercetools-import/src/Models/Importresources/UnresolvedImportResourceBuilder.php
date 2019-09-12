<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importresources;

use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<UnresolvedImportResource>
 */
final class UnresolvedImportResourceBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**
     * @var ?string
     */
    private $resourceKey;

    /**
     * @var ?string
     */
    private $resourceAsString;

    /**
     * @var ?string
     */
    private $importSinkKey;

    /**
     * @var ?string
     */
    private $resourceType;

    public function __construct()
    {
    }

    /**
     * <p>The creation time of this import item.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>The last modification time of this import item.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * <p>The key of the imported resource.</p>.
     *
     * @return null|string
     */
    public function getResourceKey()
    {
        return $this->resourceKey;
    }

    /**
     * <p>the resource which could not successfull imported</p>.
     *
     * @return null|string
     */
    public function getResourceAsString()
    {
        return $this->resourceAsString;
    }

    /**
     * <p>the key of the import sink</p>.
     *
     * @return null|string
     */
    public function getImportSinkKey()
    {
        return $this->importSinkKey;
    }

    /**
     * <p>The type of the imported resource.</p>.
     *
     * @return null|string
     */
    public function getResourceType()
    {
        return $this->resourceType;
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

    /**
     * @return $this
     */
    public function withResourceKey(?string $resourceKey)
    {
        $this->resourceKey = $resourceKey;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResourceAsString(?string $resourceAsString)
    {
        $this->resourceAsString = $resourceAsString;

        return $this;
    }

    /**
     * @return $this
     */
    public function withImportSinkKey(?string $importSinkKey)
    {
        $this->importSinkKey = $importSinkKey;

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

    public function build(): UnresolvedImportResource
    {
        return new UnresolvedImportResourceModel(
            $this->createdAt,
            $this->lastModifiedAt,
            $this->resourceKey,
            $this->resourceAsString,
            $this->importSinkKey,
            $this->resourceType
        );
    }

    public static function of(): UnresolvedImportResourceBuilder
    {
        return new self();
    }
}
