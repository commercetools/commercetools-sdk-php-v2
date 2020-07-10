<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importsinks;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;


/**
 * @internal
 */
final class ImportSinkDraftModel extends JsonObjectModel implements ImportSinkDraft
{

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
        int $version = null,
        string $key = null,
        string $resourceType = null
    ) {
        $this->version = $version;
        $this->key = $key;
        $this->resourceType = $resourceType;

    }

    /**
     * <p>The version of this resource.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ImportSinkDraft::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>The unique key of the import sink.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportSinkDraft::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>The type of import resource sent to this import sink.</p>
     *
     * @return null|string
     */
    public function getResourceType()
    {
        if (is_null($this->resourceType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportSinkDraft::FIELD_RESOURCE_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->resourceType = (string) $data;
        }

        return $this->resourceType;
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



}
