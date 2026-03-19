<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\BusinessUnitResourceIdentifier;
use Commercetools\History\Models\Common\BusinessUnitResourceIdentifierBuilder;

/**
 * @implements Builder<SetUnitTypeChange>
 */
final class SetUnitTypeChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|BusinessUnitResourceIdentifier|BusinessUnitResourceIdentifierBuilder
     */
    private $parentUnit;

    /**

     * @var ?string
     */
    private $previousValue;

    /**

     * @var ?string
     */
    private $nextValue;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>If <code>unitType=&quot;Division&quot;</code>, reference to the new parent unit for the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getParentUnit()
    {
        return $this->parentUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->parentUnit->build() : $this->parentUnit;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|string
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|string
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

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
     * @param ?string $previousValue
     * @return $this
     */
    public function withPreviousValue(?string $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?string $nextValue
     * @return $this
     */
    public function withNextValue(?string $nextValue)
    {
        $this->nextValue = $nextValue;

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

    public function build(): SetUnitTypeChange
    {
        return new SetUnitTypeChangeModel(
            $this->change,
            $this->parentUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->parentUnit->build() : $this->parentUnit,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): SetUnitTypeChangeBuilder
    {
        return new self();
    }
}
