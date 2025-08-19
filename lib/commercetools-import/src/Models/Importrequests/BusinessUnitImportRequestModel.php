<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\BusinessUnits\BusinessUnitImportCollection;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitImportRequestModel extends JsonObjectModel implements BusinessUnitImportRequest
{
    public const DISCRIMINATOR_VALUE = 'business-unit';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?BusinessUnitImportCollection
     */
    protected $resources;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?BusinessUnitImportCollection $resources = null,
        ?string $type = null
    ) {
        $this->resources = $resources;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The resource type that can be imported.</p>
     *
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The Business Unit import resources of this request. Can contain <a href="ctp:import:type:CompanyBusinessUnitImport">CompanyBusinessUnitImport</a> or <a href="ctp:import:type:DivisionBusinessUnitImport">DivisionBusinessUnitImport</a>.</p>
     *
     *
     * @return null|BusinessUnitImportCollection
     */
    public function getResources()
    {
        if (is_null($this->resources)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_RESOURCES);
            if (is_null($data)) {
                return null;
            }
            $this->resources = BusinessUnitImportCollection::fromArray($data);
        }

        return $this->resources;
    }


    /**
     * @param ?BusinessUnitImportCollection $resources
     */
    public function setResources(?BusinessUnitImportCollection $resources): void
    {
        $this->resources = $resources;
    }
}
