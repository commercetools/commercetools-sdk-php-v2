<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\BusinessUnit\BusinessUnit;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitCreatedMessagePayload>
 */
final class BusinessUnitCreatedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|BusinessUnit|BusinessUnitBuilder
     */
    private $businessUnit;

    /**
     * <p>The <a href="ctp:api:type:BusinessUnit">Business Unit</a> that was created.</p>
     *

     * @return null|BusinessUnit
     */
    public function getBusinessUnit()
    {
        return $this->businessUnit instanceof BusinessUnitBuilder ? $this->businessUnit->build() : $this->businessUnit;
    }

    /**
     * @param ?BusinessUnit $businessUnit
     * @return $this
     */
    public function withBusinessUnit(?BusinessUnit $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @deprecated use withBusinessUnit() instead
     * @return $this
     */
    public function withBusinessUnitBuilder(?BusinessUnitBuilder $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    public function build(): BusinessUnitCreatedMessagePayload
    {
        return new BusinessUnitCreatedMessagePayloadModel(
            $this->businessUnit instanceof BusinessUnitBuilder ? $this->businessUnit->build() : $this->businessUnit
        );
    }

    public static function of(): BusinessUnitCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
