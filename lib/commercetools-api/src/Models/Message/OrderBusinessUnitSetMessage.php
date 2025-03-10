<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitKeyReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderBusinessUnitSetMessage extends OrderMessage
{
    public const FIELD_BUSINESS_UNIT = 'businessUnit';
    public const FIELD_OLDBUSINESS_UNIT = 'oldbusinessUnit';

    /**
     * <p><a href="ctp:api:type:BusinessUnit">BusinessUnit</a> on the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:OrderSetBusinessUnitAction">Set Business Unit</a> update action on Orders or <a href="ctp:api:type:StagedOrderSetBusinessUnitAction">Set Business Unit</a> update action on Order Edits.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getBusinessUnit();

    /**
     * <p><a href="ctp:api:type:BusinessUnit">BusinessUnit</a> on the <a href="ctp:api:type:Order">Order</a> before the <a href="ctp:api:type:OrderSetBusinessUnitAction">Set Business Unit</a> update action on Orders or <a href="ctp:api:type:StagedOrderSetBusinessUnitAction">Set Business Unit</a> update action on Order Edits.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getOldbusinessUnit();

    /**
     * @param ?BusinessUnitKeyReference $businessUnit
     */
    public function setBusinessUnit(?BusinessUnitKeyReference $businessUnit): void;

    /**
     * @param ?BusinessUnitKeyReference $oldbusinessUnit
     */
    public function setOldbusinessUnit(?BusinessUnitKeyReference $oldbusinessUnit): void;
}
