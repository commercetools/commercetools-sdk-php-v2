<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\Reference;
use Commercetools\History\Models\Common\ReferenceBuilder;

/**
 * @implements Builder<StagedQuoteLabel>
 */
final class StagedQuoteLabelBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $customer;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $quoteRequest;

    /**
     * <p>User-defined unique identifier of the Staged Quote.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The <a href="/../api/quotes-overview#buyer">Buyer</a> who requested the Quote.</p>
     *

     * @return null|Reference
     */
    public function getCustomer()
    {
        return $this->customer instanceof ReferenceBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * <p>Quote Request related to the Staged Quote.</p>
     *

     * @return null|Reference
     */
    public function getQuoteRequest()
    {
        return $this->quoteRequest instanceof ReferenceBuilder ? $this->quoteRequest->build() : $this->quoteRequest;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?Reference $customer
     * @return $this
     */
    public function withCustomer(?Reference $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @param ?Reference $quoteRequest
     * @return $this
     */
    public function withQuoteRequest(?Reference $quoteRequest)
    {
        $this->quoteRequest = $quoteRequest;

        return $this;
    }

    /**
     * @deprecated use withCustomer() instead
     * @return $this
     */
    public function withCustomerBuilder(?ReferenceBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @deprecated use withQuoteRequest() instead
     * @return $this
     */
    public function withQuoteRequestBuilder(?ReferenceBuilder $quoteRequest)
    {
        $this->quoteRequest = $quoteRequest;

        return $this;
    }

    public function build(): StagedQuoteLabel
    {
        return new StagedQuoteLabelModel(
            $this->key,
            $this->customer instanceof ReferenceBuilder ? $this->customer->build() : $this->customer,
            $this->quoteRequest instanceof ReferenceBuilder ? $this->quoteRequest->build() : $this->quoteRequest
        );
    }

    public static function of(): StagedQuoteLabelBuilder
    {
        return new self();
    }
}
