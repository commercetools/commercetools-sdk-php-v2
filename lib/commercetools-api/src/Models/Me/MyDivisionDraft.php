<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyDivisionDraft extends MyBusinessUnitDraft
{
    public const FIELD_PARENT_UNIT = 'parentUnit';

    /**
     * <p>The parent unit of this Division. Can be a Company or a Division.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getParentUnit();

    /**
     * @param ?BusinessUnitResourceIdentifier $parentUnit
     */
    public function setParentUnit(?BusinessUnitResourceIdentifier $parentUnit): void;
}
