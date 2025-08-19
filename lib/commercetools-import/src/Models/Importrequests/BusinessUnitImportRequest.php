<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\BusinessUnits\BusinessUnitImportCollection;

interface BusinessUnitImportRequest extends ImportRequest
{
    public const FIELD_RESOURCES = 'resources';

    /**
     * <p>The Business Unit import resources of this request. Can contain <a href="ctp:import:type:CompanyBusinessUnitImport">CompanyBusinessUnitImport</a> or <a href="ctp:import:type:DivisionBusinessUnitImport">DivisionBusinessUnitImport</a>.</p>
     *

     * @return null|BusinessUnitImportCollection
     */
    public function getResources();

    /**
     * @param ?BusinessUnitImportCollection $resources
     */
    public function setResources(?BusinessUnitImportCollection $resources): void;
}
