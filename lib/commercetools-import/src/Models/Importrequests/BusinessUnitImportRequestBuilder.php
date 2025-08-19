<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\BusinessUnits\BusinessUnitImportCollection;
use stdClass;

/**
 * @implements Builder<BusinessUnitImportRequest>
 */
final class BusinessUnitImportRequestBuilder implements Builder
{
    /**

     * @var ?BusinessUnitImportCollection
     */
    private $resources;

    /**
     * <p>The Business Unit import resources of this request. Can contain <a href="ctp:import:type:CompanyBusinessUnitImport">CompanyBusinessUnitImport</a> or <a href="ctp:import:type:DivisionBusinessUnitImport">DivisionBusinessUnitImport</a>.</p>
     *

     * @return null|BusinessUnitImportCollection
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param ?BusinessUnitImportCollection $resources
     * @return $this
     */
    public function withResources(?BusinessUnitImportCollection $resources)
    {
        $this->resources = $resources;

        return $this;
    }


    public function build(): BusinessUnitImportRequest
    {
        return new BusinessUnitImportRequestModel(
            $this->resources
        );
    }

    public static function of(): BusinessUnitImportRequestBuilder
    {
        return new self();
    }
}
