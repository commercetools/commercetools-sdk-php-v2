<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importcontainers;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ImportContainerDraftModel extends JsonObjectModel implements ImportContainerDraft
{
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $resourceType;

    /**
     *
     * @var ?RetentionPolicy
     */
    protected $retentionPolicy;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $resourceType = null,
        ?RetentionPolicy $retentionPolicy = null
    ) {
        $this->key = $key;
        $this->resourceType = $resourceType;
        $this->retentionPolicy = $retentionPolicy;
    }

    /**
     * <p>User-defined unique identifier of the ImportContainer.</p>
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
     * <p>The resource type the ImportContainer will accept.
     * If not specified, the ImportContainer can import all of the supported ImportResourceTypes.</p>
     *
     *
     * @return null|string
     */
    public function getResourceType()
    {
        if (is_null($this->resourceType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_RESOURCE_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->resourceType = (string) $data;
        }

        return $this->resourceType;
    }

    /**
     * <p>Optional. When set, defines how long the ImportContainer is kept before automatic deletion.
     * When omitted, the ImportContainer receives the default <strong>72-hour</strong> lifetime.</p>
     *
     *
     * @return null|RetentionPolicy
     */
    public function getRetentionPolicy()
    {
        if (is_null($this->retentionPolicy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RETENTION_POLICY);
            if (is_null($data)) {
                return null;
            }
            $className = RetentionPolicyModel::resolveDiscriminatorClass($data);
            $this->retentionPolicy = $className::of($data);
        }

        return $this->retentionPolicy;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $resourceType
     */
    public function setResourceType(?string $resourceType): void
    {
        $this->resourceType = $resourceType;
    }

    /**
     * @param ?RetentionPolicy $retentionPolicy
     */
    public function setRetentionPolicy(?RetentionPolicy $retentionPolicy): void
    {
        $this->retentionPolicy = $retentionPolicy;
    }
}
