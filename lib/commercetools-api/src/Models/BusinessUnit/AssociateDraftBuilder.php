<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AssociateDraft>
 */
final class AssociateDraftBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $roles;

    /**

     * @var null|CustomerResourceIdentifier|CustomerResourceIdentifierBuilder
     */
    private $customer;

    /**
     * <p>Roles the Associate should hold within the Business Unit.</p>
     *

     * @return null|array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * <p>The <a href="ctp:api:type:Customer">Customer</a> to be part of the Business Unit.</p>
     *

     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * @param ?array $roles
     * @return $this
     */
    public function withRoles(?array $roles)
    {
        $this->roles = $roles;

        return $this;
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

    public function build(): AssociateDraft
    {
        return new AssociateDraftModel(
            $this->roles,
            $this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer
        );
    }

    public static function of(): AssociateDraftBuilder
    {
        return new self();
    }
}
