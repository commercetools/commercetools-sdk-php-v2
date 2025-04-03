<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitSetUnitTypeAction extends BusinessUnitUpdateAction
{
    public const FIELD_UNIT_TYPE = 'unitType';
    public const FIELD_PARENT_UNIT = 'parentUnit';

    /**
     * <p>New type of the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     * <p>If <code>unitType=&quot;Company&quot;</code>, the Business Unit <code>storeMode</code>, <code>associateMode</code>, and <code>approvalRuleMode</code> field values must be <code>Explicit</code>.</p>
     *

     * @return null|string
     */
    public function getUnitType();

    /**
     * <p>New parent unit for the <a href="ctp:api:type:BusinessUnit">Business Unit</a>, if <code>unitType=&quot;Division&quot;</code>.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getParentUnit();

    /**
     * @param ?string $unitType
     */
    public function setUnitType(?string $unitType): void;

    /**
     * @param ?BusinessUnitResourceIdentifier $parentUnit
     */
    public function setParentUnit(?BusinessUnitResourceIdentifier $parentUnit): void;
}
