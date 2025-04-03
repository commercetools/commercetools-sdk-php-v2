<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitSetUnitTypeAction>
 */
final class BusinessUnitSetUnitTypeActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $unitType;

    /**

     * @var null|BusinessUnitResourceIdentifier|BusinessUnitResourceIdentifierBuilder
     */
    private $parentUnit;

    /**
     * <p>New type of the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     * <p>If <code>unitType=&quot;Company&quot;</code>, the Business Unit <code>storeMode</code>, <code>associateMode</code>, and <code>approvalRuleMode</code> field values must be <code>Explicit</code>.</p>
     *

     * @return null|string
     */
    public function getUnitType()
    {
        return $this->unitType;
    }

    /**
     * <p>New parent unit for the <a href="ctp:api:type:BusinessUnit">Business Unit</a>, if <code>unitType=&quot;Division&quot;</code>.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getParentUnit()
    {
        return $this->parentUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->parentUnit->build() : $this->parentUnit;
    }

    /**
     * @param ?string $unitType
     * @return $this
     */
    public function withUnitType(?string $unitType)
    {
        $this->unitType = $unitType;

        return $this;
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

    public function build(): BusinessUnitSetUnitTypeAction
    {
        return new BusinessUnitSetUnitTypeActionModel(
            $this->unitType,
            $this->parentUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->parentUnit->build() : $this->parentUnit
        );
    }

    public static function of(): BusinessUnitSetUnitTypeActionBuilder
    {
        return new self();
    }
}
