<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\History\Models\Common\Reference;
use Commercetools\History\Models\Common\ReferenceModel;
use Commercetools\History\Models\Label\Label;
use Commercetools\History\Models\Label\LabelModel;

/**
 * @internal
 */
final class RecordModel extends JsonObjectModel implements Record
{

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?int
     */
    protected $previousVersion;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?ModifiedBy
     */
    protected $modifiedBy;

    /**
     * @var ?string
     */
    protected $modifiedAt;

    /**
     * @var ?Label
     */
    protected $label;

    /**
     * @var ?Label
     */
    protected $previousLabel;

    /**
     * @var ?ChangeCollection
     */
    protected $changes;

    /**
     * @var ?Reference
     */
    protected $resource;

    /**
     * @var ?bool
     */
    protected $withoutChanges;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $version = null,
        ?int $previousVersion = null,
        ?string $type = null,
        ?ModifiedBy $modifiedBy = null,
        ?string $modifiedAt = null,
        ?Label $label = null,
        ?Label $previousLabel = null,
        ?ChangeCollection $changes = null,
        ?Reference $resource = null,
        ?bool $withoutChanges = null
    ) {
        $this->version = $version;
        $this->previousVersion = $previousVersion;
        $this->type = $type;
        $this->modifiedBy = $modifiedBy;
        $this->modifiedAt = $modifiedAt;
        $this->label = $label;
        $this->previousLabel = $previousLabel;
        $this->changes = $changes;
        $this->resource = $resource;
        $this->withoutChanges = $withoutChanges;

    }

    /**
     * <p>Version of the resource after the change.</p>
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
            $this->version =  (int) $data;
        }

        return $this->version;
    }

    /**
     * <p>Version of the resource before the change.</p>
     *
     * @return null|int
     */
    public function getPreviousVersion()
    {
        if (is_null($this->previousVersion)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->previousVersion =  (int) $data;
        }

        return $this->previousVersion;
    }

    /**
     * <p>Type of the change (creation, update or deletion).</p>
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Information about the user or the API client who performed the change.</p>
     *
     * @return null|ModifiedBy
     */
    public function getModifiedBy()
    {
        if (is_null($this->modifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->modifiedBy =  ModifiedByModel::of($data);
        }

        return $this->modifiedBy;
    }

    /**
     * <p>Date and time when the change was made.</p>
     *
     * @return null|string
     */
    public function getModifiedAt()
    {
        if (is_null($this->modifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $this->modifiedAt =  (string) $data;
        }

        return $this->modifiedAt;
    }

    /**
     * <p>Information that describes the resource after the change.</p>
     *
     * @return null|Label
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LABEL);
            if (is_null($data)) {
                return null;
            }

            $this->label =  LabelModel::of($data);
        }

        return $this->label;
    }

    /**
     * <p>Information that describes the resource before the change.</p>
     *
     * @return null|Label
     */
    public function getPreviousLabel()
    {
        if (is_null($this->previousLabel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIOUS_LABEL);
            if (is_null($data)) {
                return null;
            }

            $this->previousLabel =  LabelModel::of($data);
        }

        return $this->previousLabel;
    }

    /**
     * <p>Shows the differences in the resource between <code>previousVersion</code> and <code>version</code>.
     * The value is not identical to the actual array of update actions that was sent to the platform and is not limited to update actions (see, for example, <a href="/general-concepts#optimistic-concurrency-control">Optimistic  Concurrency Control</a>).</p>
     *
     * @return null|ChangeCollection
     */
    public function getChanges()
    {
        if (is_null($this->changes)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_CHANGES);
            if (is_null($data)) {
                return null;
            }
            $this->changes =  ChangeCollection::fromArray($data);
        }

        return $this->changes;
    }

    /**
     * <p><a href="/types#reference">Reference</a> to the changed resource.</p>
     *
     * @return null|Reference
     */
    public function getResource()
    {
        if (is_null($this->resource)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RESOURCE);
            if (is_null($data)) {
                return null;
            }

            $this->resource =  ReferenceModel::of($data);
        }

        return $this->resource;
    }

    /**
     * <p><code>true</code> if no change was detected.
     * The version number of the resource can be increased even without any change in the resource.</p>
     *
     * @return null|bool
     */
    public function getWithoutChanges()
    {
        if (is_null($this->withoutChanges)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_WITHOUT_CHANGES);
            if (is_null($data)) {
                return null;
            }
            $this->withoutChanges =  (bool) $data;
        }

        return $this->withoutChanges;
    }


    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?int $previousVersion
     */
    public function setPreviousVersion(?int $previousVersion): void
    {
        $this->previousVersion = $previousVersion;
    }

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param ?ModifiedBy $modifiedBy
     */
    public function setModifiedBy(?ModifiedBy $modifiedBy): void
    {
        $this->modifiedBy = $modifiedBy;
    }

    /**
     * @param ?string $modifiedAt
     */
    public function setModifiedAt(?string $modifiedAt): void
    {
        $this->modifiedAt = $modifiedAt;
    }

    /**
     * @param ?Label $label
     */
    public function setLabel(?Label $label): void
    {
        $this->label = $label;
    }

    /**
     * @param ?Label $previousLabel
     */
    public function setPreviousLabel(?Label $previousLabel): void
    {
        $this->previousLabel = $previousLabel;
    }

    /**
     * @param ?ChangeCollection $changes
     */
    public function setChanges(?ChangeCollection $changes): void
    {
        $this->changes = $changes;
    }

    /**
     * @param ?Reference $resource
     */
    public function setResource(?Reference $resource): void
    {
        $this->resource = $resource;
    }

    /**
     * @param ?bool $withoutChanges
     */
    public function setWithoutChanges(?bool $withoutChanges): void
    {
        $this->withoutChanges = $withoutChanges;
    }



}
