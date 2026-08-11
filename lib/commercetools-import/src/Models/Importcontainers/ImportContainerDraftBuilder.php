<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importcontainers;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ImportContainerDraft>
 */
final class ImportContainerDraftBuilder implements Builder
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

     * @var null|RetentionPolicy|RetentionPolicyBuilder
     */
    private $retentionPolicy;

    /**
     * <p>User-defined unique identifier of the ImportContainer.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The resource type the ImportContainer will accept.
     * If not specified, the ImportContainer can import all of the supported ImportResourceTypes.</p>
     *

     * @return null|string
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * <p>Optional. When set, defines how long the ImportContainer is kept before automatic deletion.
     * When omitted, the ImportContainer receives the default <strong>72-hour</strong> lifetime.</p>
     *

     * @return null|RetentionPolicy
     */
    public function getRetentionPolicy()
    {
        return $this->retentionPolicy instanceof RetentionPolicyBuilder ? $this->retentionPolicy->build() : $this->retentionPolicy;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $resourceType
     * @return $this
     */
    public function withResourceType(?string $resourceType)
    {
        $this->resourceType = $resourceType;

        return $this;
    }

    /**
     * @param ?RetentionPolicy $retentionPolicy
     * @return $this
     */
    public function withRetentionPolicy(?RetentionPolicy $retentionPolicy)
    {
        $this->retentionPolicy = $retentionPolicy;

        return $this;
    }

    /**
     * @deprecated use withRetentionPolicy() instead
     * @return $this
     */
    public function withRetentionPolicyBuilder(?RetentionPolicyBuilder $retentionPolicy)
    {
        $this->retentionPolicy = $retentionPolicy;

        return $this;
    }

    public function build(): ImportContainerDraft
    {
        return new ImportContainerDraftModel(
            $this->key,
            $this->resourceType,
            $this->retentionPolicy instanceof RetentionPolicyBuilder ? $this->retentionPolicy->build() : $this->retentionPolicy
        );
    }

    public static function of(): ImportContainerDraftBuilder
    {
        return new self();
    }
}
