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

interface BusinessUnitTypeSetMessage extends Message
{
    public const FIELD_PARENT_UNIT = 'parentUnit';
    public const FIELD_OLD_PARENT_UNIT = 'oldParentUnit';
    public const FIELD_UNIT_TYPE = 'unitType';
    public const FIELD_OLD_UNIT_TYPE = 'oldUnitType';

    /**
     * <p>Parent unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> after the <a href="ctp:api:type:BusinessUnitSetUnitTypeAction">Set Unit Type</a> update action.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getParentUnit();

    /**
     * <p>Parent unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> before the <a href="ctp:api:type:BusinessUnitSetUnitTypeAction">Set Unit Type</a> update action.</p>
     *

     * @return null|BusinessUnitKeyReference
     */
    public function getOldParentUnit();

    /**
     * <p>Type of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> after the <a href="ctp:api:type:BusinessUnitSetUnitTypeAction">Set Unit Type</a> update action.</p>
     *

     * @return null|string
     */
    public function getUnitType();

    /**
     * <p>Type of the <a href="ctp:api:type:BusinessUnit">Business Unit</a> before the <a href="ctp:api:type:BusinessUnitSetUnitTypeAction">Set Unit Type</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldUnitType();

    /**
     * @param ?BusinessUnitKeyReference $parentUnit
     */
    public function setParentUnit(?BusinessUnitKeyReference $parentUnit): void;

    /**
     * @param ?BusinessUnitKeyReference $oldParentUnit
     */
    public function setOldParentUnit(?BusinessUnitKeyReference $oldParentUnit): void;

    /**
     * @param ?string $unitType
     */
    public function setUnitType(?string $unitType): void;

    /**
     * @param ?string $oldUnitType
     */
    public function setOldUnitType(?string $oldUnitType): void;
}
