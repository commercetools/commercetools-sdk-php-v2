<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeHistory;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\History\Models\Common\KeyReference;
use Commercetools\History\Models\Common\KeyReferenceBuilder;
use Commercetools\History\Models\Common\KeyReferenceCollection;
use Commercetools\History\Models\Common\ResourceIdentifier;
use Commercetools\History\Models\Common\ResourceIdentifierBuilder;
use Commercetools\History\Models\Label\Label;
use Commercetools\History\Models\Label\LabelBuilder;

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

     * @var ?ChangeCollection
     */
    private $changes;

    /**

     * @var null|ResourceIdentifier|ResourceIdentifierBuilder
     */
    private $resource;

    /**

     * @var ?KeyReferenceCollection
     */
    private $stores;

    /**

     * @var null|KeyReference|KeyReferenceBuilder
     */
    private $businessUnit;

    /**

     * @var ?bool
     */
    private $withoutChanges;

    /**
     * <p>Version of the resource after the change.</p>
     * <p>For more information on how the version is incremented, see <a href="/../api/general-concepts#optimistic-concurrency-control">Optimistic Concurrency Control</a>.</p>
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
     * <p>Indicates the type of change.
     * For creation, update, or deletion, the value is <code>&quot;ResourceCreated&quot;</code>, <code>&quot;ResourceUpdated&quot;</code>, or <code>&quot;ResourceDeleted&quot;</code> respectively.</p>
     *

     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <p>Information about the user or API Client who performed the change.</p>
     *

     * @return null|ModifiedBy
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy instanceof ModifiedByBuilder ? $this->modifiedBy->build() : $this->modifiedBy;
    }

    /**
     * <p>Date and time (UTC) the change was made.</p>
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
     * <p>Shows the differences in the resource between <code>previousVersion</code> and <code>version</code>.</p>
     * <p>The value is not identical to the actual array of update actions sent and is not limited to update actions (see, for example, <a href="/general-concepts#optimistic-concurrency-control">Optimistic  Concurrency Control</a>).</p>
     *

     * @return null|ChangeCollection
     */
    public function getChanges()
    {
        return $this->changes;
    }

    /**
     * <p>ResourceIdentifier of the changed resource.</p>
     *

     * @return null|ResourceIdentifier
     */
    public function getResource()
    {
        return $this->resource instanceof ResourceIdentifierBuilder ? $this->resource->build() : $this->resource;
    }

    /**
     * <p>References to the <a href="ctp:api:type:Store">Stores</a> associated with the <a href="ctp:history:type:Change">Change</a>.</p>
     *

     * @return null|KeyReferenceCollection
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * <p>Reference to the <a href="ctp:api:type:BusinessUnit">Business Unit</a> associated with the <a href="ctp:history:type:Change">Change</a>. Only available for <a href="/../offering/composable-commerce#composable-commerce-for-b2b">B2B</a>-enabled Projects.</p>
     *

     * @return null|KeyReference
     */
    public function getBusinessUnit()
    {
        return $this->businessUnit instanceof KeyReferenceBuilder ? $this->businessUnit->build() : $this->businessUnit;
    }

    /**
     * <p><code>true</code> if no change was detected.</p>
     * <p>The version number of the resource can be increased even without any change in the resource.</p>
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
     * @param ?ChangeCollection $changes
     * @return $this
     */
    public function withChanges(?ChangeCollection $changes)
    {
        $this->changes = $changes;

        return $this;
    }

    /**
     * @param ?ResourceIdentifier $resource
     * @return $this
     */
    public function withResource(?ResourceIdentifier $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @param ?KeyReferenceCollection $stores
     * @return $this
     */
    public function withStores(?KeyReferenceCollection $stores)
    {
        $this->stores = $stores;

        return $this;
    }

    /**
     * @param ?KeyReference $businessUnit
     * @return $this
     */
    public function withBusinessUnit(?KeyReference $businessUnit)
    {
        $this->businessUnit = $businessUnit;

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
     * @deprecated use withModifiedBy() instead
     * @return $this
     */
    public function withModifiedByBuilder(?ModifiedByBuilder $modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * @deprecated use withLabel() instead
     * @return $this
     */
    public function withLabelBuilder(?LabelBuilder $label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @deprecated use withPreviousLabel() instead
     * @return $this
     */
    public function withPreviousLabelBuilder(?LabelBuilder $previousLabel)
    {
        $this->previousLabel = $previousLabel;

        return $this;
    }

    /**
     * @deprecated use withResource() instead
     * @return $this
     */
    public function withResourceBuilder(?ResourceIdentifierBuilder $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @deprecated use withBusinessUnit() instead
     * @return $this
     */
    public function withBusinessUnitBuilder(?KeyReferenceBuilder $businessUnit)
    {
        $this->businessUnit = $businessUnit;

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
            $this->resource instanceof ResourceIdentifierBuilder ? $this->resource->build() : $this->resource,
            $this->stores,
            $this->businessUnit instanceof KeyReferenceBuilder ? $this->businessUnit->build() : $this->businessUnit,
            $this->withoutChanges
        );
    }

    public static function of(): RecordBuilder
    {
        return new self();
    }
}
