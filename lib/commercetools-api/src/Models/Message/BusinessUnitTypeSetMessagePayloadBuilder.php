<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitTypeSetMessagePayload>
 */
final class BusinessUnitTypeSetMessagePayloadBuilder implements Builder
{
    /**

     * @var null|BusinessUnitKeyReference|BusinessUnitKeyReferenceBuilder
     */
    private $parentUnit;

    /**

     * @var null|BusinessUnitKeyReference|BusinessUnitKeyReferenceBuilder
     */
    private $oldParentUnit;

    /**

     * @var ?string
     */
    private $unitType;

    /**

     * @var ?string
     */
    private $oldUnitType;

    /**
     * <p>Parent unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> after the <a href="ctp:api:type:BusinessUnitSetUnitTypeAction">Set Unit Type</a> update action.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getParentUnit()
    {
        return $this->parentUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->parentUnit->build() : $this->parentUnit;
    }

    /**
     * <p>Parent unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> before the <a href="ctp:api:type:BusinessUnitSetUnitTypeAction">Set Unit Type</a> update action.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getOldParentUnit()
    {
        return $this->oldParentUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->oldParentUnit->build() : $this->oldParentUnit;
    }

    /**
     * <p>Type of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> after the <a href="ctp:api:type:BusinessUnitSetUnitTypeAction">Set Unit Type</a> update action.</p>
     *

     * @return null|string
     */
    public function getUnitType()
    {
        return $this->unitType;
    }

    /**
     * <p>Type of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> before the <a href="ctp:api:type:BusinessUnitSetUnitTypeAction">Set Unit Type</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldUnitType()
    {
        return $this->oldUnitType;
    }

    /**
     * @param ?BusinessUnitKeyReference $parentUnit
     * @return $this
     */
    public function withParentUnit(?BusinessUnitKeyReference $parentUnit)
    {
        $this->parentUnit = $parentUnit;

        return $this;
    }

    /**
     * @param ?BusinessUnitKeyReference $oldParentUnit
     * @return $this
     */
    public function withOldParentUnit(?BusinessUnitKeyReference $oldParentUnit)
    {
        $this->oldParentUnit = $oldParentUnit;

        return $this;
    }

    /**
     * @param ?string $unitType
     * @return $this
     */
    public function withUnitType(?string $unitType)
    {
        $this->unitType = $unitType;

        return $this;
    }

    /**
     * @param ?string $oldUnitType
     * @return $this
     */
    public function withOldUnitType(?string $oldUnitType)
    {
        $this->oldUnitType = $oldUnitType;

        return $this;
    }

    /**
     * @deprecated use withParentUnit() instead
     * @return $this
     */
    public function withParentUnitBuilder(?BusinessUnitKeyReferenceBuilder $parentUnit)
    {
        $this->parentUnit = $parentUnit;

        return $this;
    }

    /**
     * @deprecated use withOldParentUnit() instead
     * @return $this
     */
    public function withOldParentUnitBuilder(?BusinessUnitKeyReferenceBuilder $oldParentUnit)
    {
        $this->oldParentUnit = $oldParentUnit;

        return $this;
    }

    public function build(): BusinessUnitTypeSetMessagePayload
    {
        return new BusinessUnitTypeSetMessagePayloadModel(
            $this->parentUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->parentUnit->build() : $this->parentUnit,
            $this->oldParentUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->oldParentUnit->build() : $this->oldParentUnit,
            $this->unitType,
            $this->oldUnitType
        );
    }

    public static function of(): BusinessUnitTypeSetMessagePayloadBuilder
    {
        return new self();
    }
}
