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
 * @implements Builder<BusinessUnitTopLevelUnitSetMessagePayload>
 */
final class BusinessUnitTopLevelUnitSetMessagePayloadBuilder implements Builder
{
    /**

     * @var null|BusinessUnitKeyReference|BusinessUnitKeyReferenceBuilder
     */
    private $topLevelUnit;

    /**

     * @var null|BusinessUnitKeyReference|BusinessUnitKeyReferenceBuilder
     */
    private $oldTopLevelUnit;

    /**
     * <p>Top-level unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> after the <a href="ctp:api:type:BusinessUnitSetUnitTypeAction">Set Unit Type</a> or <a href="ctp:api:type:BusinessUnitChangeParentUnitAction">Change Parent Unit</a> update action.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getTopLevelUnit()
    {
        return $this->topLevelUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->topLevelUnit->build() : $this->topLevelUnit;
    }

    /**
     * <p>Top-level unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> before the <a href="ctp:api:type:BusinessUnitSetUnitTypeAction">Set Unit Type</a> or <a href="ctp:api:type:BusinessUnitChangeParentUnitAction">Change Parent Unit</a> update action.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getOldTopLevelUnit()
    {
        return $this->oldTopLevelUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->oldTopLevelUnit->build() : $this->oldTopLevelUnit;
    }

    /**
     * @param ?BusinessUnitKeyReference $topLevelUnit
     * @return $this
     */
    public function withTopLevelUnit(?BusinessUnitKeyReference $topLevelUnit)
    {
        $this->topLevelUnit = $topLevelUnit;

        return $this;
    }

    /**
     * @param ?BusinessUnitKeyReference $oldTopLevelUnit
     * @return $this
     */
    public function withOldTopLevelUnit(?BusinessUnitKeyReference $oldTopLevelUnit)
    {
        $this->oldTopLevelUnit = $oldTopLevelUnit;

        return $this;
    }

    /**
     * @deprecated use withTopLevelUnit() instead
     * @return $this
     */
    public function withTopLevelUnitBuilder(?BusinessUnitKeyReferenceBuilder $topLevelUnit)
    {
        $this->topLevelUnit = $topLevelUnit;

        return $this;
    }

    /**
     * @deprecated use withOldTopLevelUnit() instead
     * @return $this
     */
    public function withOldTopLevelUnitBuilder(?BusinessUnitKeyReferenceBuilder $oldTopLevelUnit)
    {
        $this->oldTopLevelUnit = $oldTopLevelUnit;

        return $this;
    }

    public function build(): BusinessUnitTopLevelUnitSetMessagePayload
    {
        return new BusinessUnitTopLevelUnitSetMessagePayloadModel(
            $this->topLevelUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->topLevelUnit->build() : $this->topLevelUnit,
            $this->oldTopLevelUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->oldTopLevelUnit->build() : $this->oldTopLevelUnit
        );
    }

    public static function of(): BusinessUnitTopLevelUnitSetMessagePayloadBuilder
    {
        return new self();
    }
}
