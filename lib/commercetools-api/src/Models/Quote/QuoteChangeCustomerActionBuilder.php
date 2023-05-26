<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<QuoteChangeCustomerAction>
 */
final class QuoteChangeCustomerActionBuilder implements Builder
{
    /**

     * @var null|CustomerResourceIdentifier|CustomerResourceIdentifierBuilder
     */
    private $customer;

    /**
     * <p>New Customer to own the Quote.</p>
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

    public function build(): QuoteChangeCustomerAction
    {
        return new QuoteChangeCustomerActionModel(
            $this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer
        );
    }

    public static function of(): QuoteChangeCustomerActionBuilder
    {
        return new self();
    }
}
