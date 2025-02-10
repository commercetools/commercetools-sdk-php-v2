<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifier;
use Commercetools\Api\Models\BusinessUnit\BusinessUnitResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShoppingListSetBusinessUnitAction>
 */
final class ShoppingListSetBusinessUnitActionBuilder implements Builder
{
    /**

     * @var null|BusinessUnitResourceIdentifier|BusinessUnitResourceIdentifierBuilder
     */
    private $businessUnit;

    /**
     * <p>The Business Unit to assign to the Shopping List, which must have access to the <a href="/../api/projects/stores">Store</a> that is set on the Shopping List.</p>
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

    public function build(): ShoppingListSetBusinessUnitAction
    {
        return new ShoppingListSetBusinessUnitActionModel(
            $this->businessUnit instanceof BusinessUnitResourceIdentifierBuilder ? $this->businessUnit->build() : $this->businessUnit
        );
    }

    public static function of(): ShoppingListSetBusinessUnitActionBuilder
    {
        return new self();
    }
}
