<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyBusinessUnitRemoveAssociateAction>
 */
final class MyBusinessUnitRemoveAssociateActionBuilder implements Builder
{
    /**

     * @var null|CustomerResourceIdentifier|CustomerResourceIdentifierBuilder
     */
    private $customer;

    /**
     * <p><a href="ctp:api:type:Associate">Associate</a> to remove.</p>
     *

     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * @param ?CustomerResourceIdentifier $customer
     * @return $this
     */
    public function withCustomer(?CustomerResourceIdentifier $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?CustomerResourceIdentifierBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function build(): MyBusinessUnitRemoveAssociateAction
    {
        return new MyBusinessUnitRemoveAssociateActionModel(
            $this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer
        );
    }

    public static function of(): MyBusinessUnitRemoveAssociateActionBuilder
    {
        return new self();
    }
}
