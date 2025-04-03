<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitChangeParentUnitAction extends BusinessUnitUpdateAction
{
    public const FIELD_PARENT_UNIT = 'parentUnit';

    /**
     * <p>New parent unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.
     * It must be associated with the same Stores, as the old parent unit.</p>
     * <p>The Business Unit <code>inheritedAssociates</code> and <code>inheritedStores</code> field values will be <a href="/../api/general-concepts#eventual-consistency">eventually consistent</a>.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getParentUnit();

    /**
     * @param ?BusinessUnitResourceIdentifier $parentUnit
     */
    public function setParentUnit(?BusinessUnitResourceIdentifier $parentUnit): void;
}
