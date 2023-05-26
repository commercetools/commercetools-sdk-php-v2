<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<QuoteRequestCustomerChangedMessagePayload>
 */
final class QuoteRequestCustomerChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|CustomerReference|CustomerReferenceBuilder
     */
    private $customer;

    /**

     * @var null|CustomerReference|CustomerReferenceBuilder
     */
    private $previousCustomer;

    /**
     * <p>The <a href="/../api/quotes-overview#buyer">Buyer</a> who now owns the Quote Request.</p>
     *

     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p>The previous <a href="/../api/quotes-overview#buyer">Buyer</a>.</p>
     *

     * @return null|CustomerReference
     */
    public function getPreviousCustomer()
    {
        return $this->previousCustomer instanceof CustomerReferenceBuilder ? $this->previousCustomer->build() : $this->previousCustomer;
    }

    /**
     * @param ?CustomerReference $customer
     * @return $this
     */
    public function withCustomer(?CustomerReference $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @param ?CustomerReference $previousCustomer
     * @return $this
     */
    public function withPreviousCustomer(?CustomerReference $previousCustomer)
    {
        $this->previousCustomer = $previousCustomer;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?CustomerReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @deprecated use withPreviousCustomer() instead
     * @return $this
     */
    public function withPreviousCustomerBuilder(?CustomerReferenceBuilder $previousCustomer)
    {
        $this->previousCustomer = $previousCustomer;

        return $this;
    }

    public function build(): QuoteRequestCustomerChangedMessagePayload
    {
        return new QuoteRequestCustomerChangedMessagePayloadModel(
            $this->customer instanceof CustomerReferenceBuilder ? $this->customer->build() : $this->customer,
            $this->previousCustomer instanceof CustomerReferenceBuilder ? $this->previousCustomer->build() : $this->previousCustomer
        );
    }

    public static function of(): QuoteRequestCustomerChangedMessagePayloadBuilder
    {
        return new self();
    }
}
