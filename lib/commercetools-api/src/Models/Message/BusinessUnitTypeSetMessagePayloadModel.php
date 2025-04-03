<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitTypeSetMessagePayloadModel extends JsonObjectModel implements BusinessUnitTypeSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'BusinessUnitTypeSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?BusinessUnitKeyReference
     */
    protected $parentUnit;

    /**
     *
     * @var ?BusinessUnitKeyReference
     */
    protected $oldParentUnit;

    /**
     *
     * @var ?string
     */
    protected $unitType;

    /**
     *
     * @var ?string
     */
    protected $oldUnitType;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?BusinessUnitKeyReference $parentUnit = null,
        ?BusinessUnitKeyReference $oldParentUnit = null,
        ?string $unitType = null,
        ?string $oldUnitType = null,
        ?string $type = null
    ) {
        $this->parentUnit = $parentUnit;
        $this->oldParentUnit = $oldParentUnit;
        $this->unitType = $unitType;
        $this->oldUnitType = $oldUnitType;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
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
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Parent unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> after the <a href="ctp:api:type:BusinessUnitSetUnitTypeAction">Set Unit Type</a> update action.</p>
     *
     *
     * @return null|BusinessUnitKeyReference
     */
    public function getParentUnit()
    {
        if (is_null($this->parentUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PARENT_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->parentUnit = BusinessUnitKeyReferenceModel::of($data);
        }

        return $this->parentUnit;
    }

    /**
     * <p>Parent unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> before the <a href="ctp:api:type:BusinessUnitSetUnitTypeAction">Set Unit Type</a> update action.</p>
     *
     *
     * @return null|BusinessUnitKeyReference
     */
    public function getOldParentUnit()
    {
        if (is_null($this->oldParentUnit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_PARENT_UNIT);
            if (is_null($data)) {
                return null;
            }

            $this->oldParentUnit = BusinessUnitKeyReferenceModel::of($data);
        }

        return $this->oldParentUnit;
    }

    /**
     * <p>Type of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> after the <a href="ctp:api:type:BusinessUnitSetUnitTypeAction">Set Unit Type</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getUnitType()
    {
        if (is_null($this->unitType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_UNIT_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->unitType = (string) $data;
        }

        return $this->unitType;
    }

    /**
     * <p>Type of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> before the <a href="ctp:api:type:BusinessUnitSetUnitTypeAction">Set Unit Type</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldUnitType()
    {
        if (is_null($this->oldUnitType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_UNIT_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->oldUnitType = (string) $data;
        }

        return $this->oldUnitType;
    }


    /**
     * @param ?BusinessUnitKeyReference $parentUnit
     */
    public function setParentUnit(?BusinessUnitKeyReference $parentUnit): void
    {
        $this->parentUnit = $parentUnit;
    }

    /**
     * @param ?BusinessUnitKeyReference $oldParentUnit
     */
    public function setOldParentUnit(?BusinessUnitKeyReference $oldParentUnit): void
    {
        $this->oldParentUnit = $oldParentUnit;
    }

    /**
     * @param ?string $unitType
     */
    public function setUnitType(?string $unitType): void
    {
        $this->unitType = $unitType;
    }

    /**
     * @param ?string $oldUnitType
     */
    public function setOldUnitType(?string $oldUnitType): void
    {
        $this->oldUnitType = $oldUnitType;
    }
}
