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

interface BusinessUnitTopLevelUnitSetMessagePayload extends MessagePayload
{
    public const FIELD_TOP_LEVEL_UNIT = 'topLevelUnit';
    public const FIELD_OLD_TOP_LEVEL_UNIT = 'oldTopLevelUnit';

    /**
     * <p>Top-level unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> after the <a href="ctp:api:type:BusinessUnitSetUnitTypeAction">Set Unit Type</a> or <a href="ctp:api:type:BusinessUnitChangeParentUnitAction">Change Parent Unit</a> update action.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getTopLevelUnit();

    /**
     * <p>Top-level unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> before the <a href="ctp:api:type:BusinessUnitSetUnitTypeAction">Set Unit Type</a> or <a href="ctp:api:type:BusinessUnitChangeParentUnitAction">Change Parent Unit</a> update action.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getOldTopLevelUnit();

    /**
     * @param ?BusinessUnitKeyReference $topLevelUnit
     */
    public function setTopLevelUnit(?BusinessUnitKeyReference $topLevelUnit): void;

    /**
     * @param ?BusinessUnitKeyReference $oldTopLevelUnit
     */
    public function setOldTopLevelUnit(?BusinessUnitKeyReference $oldTopLevelUnit): void;
}
