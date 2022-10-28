<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyBusinessUnitChangeParentUnitAction>
 */
final class MyBusinessUnitChangeParentUnitActionBuilder implements Builder
{
    /**

     * @var null|BusinessUnitResourceIdentifier|BusinessUnitResourceIdentifierBuilder
     */
    private $parentUnit;

    /**
     * <p>New parent unit of the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getParentUnit()
    {
        return $this->parentUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->parentUnit->build() : $this->parentUnit;
    }

    /**
     * @param ?BusinessUnitResourceIdentifier $parentUnit
     * @return $this
     */
    public function withParentUnit(?BusinessUnitResourceIdentifier $parentUnit)
    {
        $this->parentUnit = $parentUnit;

        return $this;
    }

    /**
     * @deprecated use withParentUnit() instead
     * @return $this
     */
    public function withParentUnitBuilder(?BusinessUnitResourceIdentifierBuilder $parentUnit)
    {
        $this->parentUnit = $parentUnit;

        return $this;
    }

    public function build(): MyBusinessUnitChangeParentUnitAction
    {
        return new MyBusinessUnitChangeParentUnitActionModel(
            $this->parentUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->parentUnit->build() : $this->parentUnit
        );
    }

    public static function of(): MyBusinessUnitChangeParentUnitActionBuilder
    {
        return new self();
    }
}
