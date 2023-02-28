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
 * @implements Builder<MyCartSetBusinessUnitAction>
 */
final class MyCartSetBusinessUnitActionBuilder implements Builder
{
    /**

     * @var null|BusinessUnitResourceIdentifier|BusinessUnitResourceIdentifierBuilder
     */
    private $businessUnit;

    /**
     * <p>New Business Unit to assign to the Cart, which must have access to the <a href="/../api/projects/stores">Store</a> that is set on the Cart.
     * Additionally, the authenticated user must have <a href="/projects/business-units#associate">Buyer</a> access to the <a href="/projects/business-units#businessunit">Business Unit</a>.</p>
     *

     * @return null|BusinessUnitResourceIdentifier
     */
    public function getBusinessUnit()
    {
        return $this->businessUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->businessUnit->build() : $this->businessUnit;
    }

    /**
     * @param ?BusinessUnitResourceIdentifier $businessUnit
     * @return $this
     */
    public function withBusinessUnit(?BusinessUnitResourceIdentifier $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    /**
     * @deprecated use withBusinessUnit() instead
     * @return $this
     */
    public function withBusinessUnitBuilder(?BusinessUnitResourceIdentifierBuilder $businessUnit)
    {
        $this->businessUnit = $businessUnit;

        return $this;
    }

    public function build(): MyCartSetBusinessUnitAction
    {
        return new MyCartSetBusinessUnitActionModel(
            $this->businessUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->businessUnit->build() : $this->businessUnit
        );
    }

    public static function of(): MyCartSetBusinessUnitActionBuilder
    {
        return new self();
    }
}
