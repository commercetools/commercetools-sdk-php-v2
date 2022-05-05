<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceModel;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ReviewStateTransitionMessagePayloadModel extends JsonObjectModel implements ReviewStateTransitionMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ReviewStateTransition';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?StateReference
     */
    protected $oldState;

    /**
     * @var ?StateReference
     */
    protected $newState;

    /**
     * @var ?bool
     */
    protected $oldIncludedInStatistics;

    /**
     * @var ?bool
     */
    protected $newIncludedInStatistics;

    /**
     * @var ?Reference
     */
    protected $target;

    /**
     * @var ?bool
     */
    protected $force;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StateReference $oldState = null,
        ?StateReference $newState = null,
        ?bool $oldIncludedInStatistics = null,
        ?bool $newIncludedInStatistics = null,
        ?Reference $target = null,
        ?bool $force = null
    ) {
        $this->oldState = $oldState;
        $this->newState = $newState;
        $this->oldIncludedInStatistics = $oldIncludedInStatistics;
        $this->newIncludedInStatistics = $newIncludedInStatistics;
        $this->target = $target;
        $this->force = $force;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
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
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><a href="/../api/types#reference">Reference</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *
     * @return null|StateReference
     */
    public function getOldState()
    {
        if (is_null($this->oldState)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->oldState = StateReferenceModel::of($data);
        }

        return $this->oldState;
    }

    /**
     * <p><a href="/../api/types#reference">Reference</a> to a <a href="ctp:api:type:State">State</a>.</p>
     *
     * @return null|StateReference
     */
    public function getNewState()
    {
        if (is_null($this->newState)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NEW_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->newState = StateReferenceModel::of($data);
        }

        return $this->newState;
    }

    /**
     * @return null|bool
     */
    public function getOldIncludedInStatistics()
    {
        if (is_null($this->oldIncludedInStatistics)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_OLD_INCLUDED_IN_STATISTICS);
            if (is_null($data)) {
                return null;
            }
            $this->oldIncludedInStatistics = (bool) $data;
        }

        return $this->oldIncludedInStatistics;
    }

    /**
     * @return null|bool
     */
    public function getNewIncludedInStatistics()
    {
        if (is_null($this->newIncludedInStatistics)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_NEW_INCLUDED_IN_STATISTICS);
            if (is_null($data)) {
                return null;
            }
            $this->newIncludedInStatistics = (bool) $data;
        }

        return $this->newIncludedInStatistics;
    }

    /**
     * <p>A Reference represents a loose reference to another resource in the same commercetools Project identified by its <code>id</code>. The <code>typeId</code> indicates the type of the referenced resource. Each resource type has its corresponding Reference type, like <a href="ctp:api:type:ChannelReference">ChannelReference</a>.  A referenced resource can be embedded through <a href="/general-concepts#reference-expansion">Reference Expansion</a>. The expanded reference is the value of an additional <code>obj</code> field then.</p>
     *
     * @return null|Reference
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TARGET);
            if (is_null($data)) {
                return null;
            }
            $className = ReferenceModel::resolveDiscriminatorClass($data);
            $this->target = $className::of($data);
        }

        return $this->target;
    }

    /**
     * @return null|bool
     */
    public function getForce()
    {
        if (is_null($this->force)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_FORCE);
            if (is_null($data)) {
                return null;
            }
            $this->force = (bool) $data;
        }

        return $this->force;
    }


    /**
     * @param ?StateReference $oldState
     */
    public function setOldState(?StateReference $oldState): void
    {
        $this->oldState = $oldState;
    }

    /**
     * @param ?StateReference $newState
     */
    public function setNewState(?StateReference $newState): void
    {
        $this->newState = $newState;
    }

    /**
     * @param ?bool $oldIncludedInStatistics
     */
    public function setOldIncludedInStatistics(?bool $oldIncludedInStatistics): void
    {
        $this->oldIncludedInStatistics = $oldIncludedInStatistics;
    }

    /**
     * @param ?bool $newIncludedInStatistics
     */
    public function setNewIncludedInStatistics(?bool $newIncludedInStatistics): void
    {
        $this->newIncludedInStatistics = $newIncludedInStatistics;
    }

    /**
     * @param ?Reference $target
     */
    public function setTarget(?Reference $target): void
    {
        $this->target = $target;
    }

    /**
     * @param ?bool $force
     */
    public function setForce(?bool $force): void
    {
        $this->force = $force;
    }
}
