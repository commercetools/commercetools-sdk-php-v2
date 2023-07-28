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
 * @implements Builder<BusinessUnitParentChangedMessagePayload>
 */
final class BusinessUnitParentChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|BusinessUnitKeyReference|BusinessUnitKeyReferenceBuilder
     */
    private $oldParentUnit;

    /**

     * @var null|BusinessUnitKeyReference|BusinessUnitKeyReferenceBuilder
     */
    private $newParentUnit;

    /**
     * <p>Parent unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> before the <a href="ctp:api:type:BusinessUnitChangeParentUnitAction">Change Parent Unit</a> update action.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getOldParentUnit()
    {
        return $this->oldParentUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->oldParentUnit->build() : $this->oldParentUnit;
    }

    /**
     * <p>Parent unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> after the <a href="ctp:api:type:BusinessUnitChangeParentUnitAction">Change Parent Unit</a> update action.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getNewParentUnit()
    {
        return $this->newParentUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->newParentUnit->build() : $this->newParentUnit;
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
     * @param ?BusinessUnitKeyReference $newParentUnit
     * @return $this
     */
    public function withNewParentUnit(?BusinessUnitKeyReference $newParentUnit)
    {
        $this->newParentUnit = $newParentUnit;

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

    /**
     * @deprecated use withNewParentUnit() instead
     * @return $this
     */
    public function withNewParentUnitBuilder(?BusinessUnitKeyReferenceBuilder $newParentUnit)
    {
        $this->newParentUnit = $newParentUnit;

        return $this;
    }

    public function build(): BusinessUnitParentChangedMessagePayload
    {
        return new BusinessUnitParentChangedMessagePayloadModel(
            $this->oldParentUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->oldParentUnit->build() : $this->oldParentUnit,
            $this->newParentUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->newParentUnit->build() : $this->newParentUnit
        );
    }

    public static function of(): BusinessUnitParentChangedMessagePayloadBuilder
    {
        return new self();
    }
}
