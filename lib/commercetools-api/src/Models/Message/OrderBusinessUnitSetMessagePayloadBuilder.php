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
 * @implements Builder<OrderBusinessUnitSetMessagePayload>
 */
final class OrderBusinessUnitSetMessagePayloadBuilder implements Builder
{
    /**

     * @var null|BusinessUnitKeyReference|BusinessUnitKeyReferenceBuilder
     */
    private $businessUnit;

    /**

     * @var null|BusinessUnitKeyReference|BusinessUnitKeyReferenceBuilder
     */
    private $oldBusinessUnit;

    /**
     * <p><a href="ctp:api:type:BusinessUnit">BusinessUnit</a> on the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:OrderSetBusinessUnitAction">Set Business Unit</a> update action on Orders or <a href="ctp:api:type:StagedOrderSetBusinessUnitAction">Set Business Unit</a> update action on Order Edits.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit()
    {
        return $this->businessUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->businessUnit->build() : $this->businessUnit;
    }

    /**
     * <p><a href="ctp:api:type:BusinessUnit">BusinessUnit</a> on the <a href="ctp:api:type:Order">Order</a> before the <a href="ctp:api:type:OrderSetBusinessUnitAction">Set Business Unit</a> update action on Orders or <a href="ctp:api:type:StagedOrderSetBusinessUnitAction">Set Business Unit</a> update action on Order Edits.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getOldBusinessUnit()
    {
        return $this->oldBusinessUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->oldBusinessUnit->build() : $this->oldBusinessUnit;
    }

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     * @return $this
     */
    public function withBusinessUnit(?BusinessUnitKeyReference $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @param ?BusinessUnitKeyReference $oldBusinessUnit
     * @return $this
     */
    public function withOldBusinessUnit(?BusinessUnitKeyReference $oldBusinessUnit)
    {
        $this->oldBusinessUnit = $oldBusinessUnit;

        return $this;
    }

    /**
     * @deprecated use withBusinessUnit() instead
     * @return $this
     */
    public function withBusinessUnitBuilder(?BusinessUnitKeyReferenceBuilder $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @deprecated use withOldBusinessUnit() instead
     * @return $this
     */
    public function withOldBusinessUnitBuilder(?BusinessUnitKeyReferenceBuilder $oldBusinessUnit)
    {
        $this->oldBusinessUnit = $oldBusinessUnit;

        return $this;
    }

    public function build(): OrderBusinessUnitSetMessagePayload
    {
        return new OrderBusinessUnitSetMessagePayloadModel(
            $this->businessUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->businessUnit->build() : $this->businessUnit,
            $this->oldBusinessUnit instanceof BusinessUnitKeyReferenceBuilder ? $this->oldBusinessUnit->build() : $this->oldBusinessUnit
        );
    }

    public static function of(): OrderBusinessUnitSetMessagePayloadBuilder
    {
        return new self();
    }
}
