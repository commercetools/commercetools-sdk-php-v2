<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<Record>
 */
final class RecordBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?int
     */
    private $previousVersion;

    /**
     * @var ?string
     */
    private $type;

    /**
     * @var null|ModifiedBy|ModifiedByBuilder
     */
    private $modifiedBy;

    /**
     * @var ?string
     */
    private $modifiedAt;

    /**
     * @var null|Label|LabelBuilder
     */
    private $label;

    /**
     * @var null|Label|LabelBuilder
     */
    private $previousLabel;

    /**
     * @var ?ActionCollection
     */
    private $changes;

    /**
     * @var null|Reference|ReferenceBuilder
     */
    private $resource;

    /**
     * @var ?bool
     */
    private $withoutChanges;

    /**
     * <p>Version of the resource after the change.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Version of the resource before the change.</p>
     *
     * @return null|int
     */
    public function getPreviousVersion()
    {
        return $this->previousVersion;
    }

    /**
     * <p>Type of the change (creation, update or deletion).</p>
     *
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <p>Information about the user or the client who performed the change.</p>
     *
     * @return null|ModifiedBy
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy instanceof ModifiedByBuilder ? $this->modifiedBy->build() : $this->modifiedBy;
    }

    /**
     * <p>Date and time when the change was made.</p>
     *
     * @return null|string
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * <p>Information that describes the resource after the change.</p>
     *
     * @return null|Label
     */
    public function getLabel()
    {
        return $this->label instanceof LabelBuilder ? $this->label->build() : $this->label;
    }

    /**
     * <p>Information that describes the resource before the change.</p>
     *
     * @return null|Label
     */
    public function getPreviousLabel()
    {
        return $this->previousLabel instanceof LabelBuilder ? $this->previousLabel->build() : $this->previousLabel;
    }

    /**
     * <p>Shows the differences in the resource between <code>previousVersion</code> and <code>version</code>.
     * The value is not designed to represent the actual array of update actions that was sent to the platform nor is limited to update actions (see, for example, <a href="/general-concepts#optimistic-concurrency-control">Optimistic  Concurrency Control</a>).</p>
     *
     * @return null|ActionCollection
     */
    public function getChanges()
    {
        return $this->changes;
    }

    /**
     * <p><a href="/types#reference">Reference</a> to the changed resource.</p>
     *
     * @return null|Reference
     */
    public function getResource()
    {
        return $this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource;
    }

    /**
     * <p><code>true</code> if no change was detected.</p>
     *
     * @return null|bool
     */
    public function getWithoutChanges()
    {
        return $this->withoutChanges;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?int $previousVersion
     * @return $this
     */
    public function withPreviousVersion(?int $previousVersion)
    {
        $this->previousVersion = $previousVersion;

        return $this;
    }

    /**
     * @param ?string $type
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param ?ModifiedBy $modifiedBy
     * @return $this
     */
    public function withModifiedBy(?ModifiedBy $modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * @param ?string $modifiedAt
     * @return $this
     */
    public function withModifiedAt(?string $modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    /**
     * @param ?Label $label
     * @return $this
     */
    public function withLabel(?Label $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @param ?Label $previousLabel
     * @return $this
     */
    public function withPreviousLabel(?Label $previousLabel)
    {
        $this->previousLabel = $previousLabel;

        return $this;
    }

    /**
     * @param ?ActionCollection $changes
     * @return $this
     */
    public function withChanges(?ActionCollection $changes)
    {
        $this->changes = $changes;

        return $this;
    }

    /**
     * @param ?Reference $resource
     * @return $this
     */
    public function withResource(?Reference $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @param ?bool $withoutChanges
     * @return $this
     */
    public function withWithoutChanges(?bool $withoutChanges)
    {
        $this->withoutChanges = $withoutChanges;

        return $this;
    }

    /**
     * @return $this
     */
    public function withModifiedByBuilder(?ModifiedByBuilder $modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLabelBuilder(?LabelBuilder $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousLabelBuilder(?LabelBuilder $previousLabel)
    {
        $this->previousLabel = $previousLabel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResourceBuilder(?ReferenceBuilder $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    public function build(): Record
    {
        return new RecordModel(
            $this->version,
            $this->previousVersion,
            $this->type,
            $this->modifiedBy instanceof ModifiedByBuilder ? $this->modifiedBy->build() : $this->modifiedBy,
            $this->modifiedAt,
            $this->label instanceof LabelBuilder ? $this->label->build() : $this->label,
            $this->previousLabel instanceof LabelBuilder ? $this->previousLabel->build() : $this->previousLabel,
            $this->changes,
            $this->resource instanceof ReferenceBuilder ? $this->resource->build() : $this->resource,
            $this->withoutChanges
        );
    }

    public static function of(): RecordBuilder
    {
        return new self();
    }
}
