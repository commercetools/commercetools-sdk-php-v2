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
 * @implements Builder<QuoteLabel>
 */
final class QuoteLabelBuilder implements Builder
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
    private $stagedQuote;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $quoteRequest;

    /**

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**

     * @return null|Reference
     */
    public function getCustomer()
    {
        return $this->customer instanceof ReferenceBuilder ? $this->customer->build() : $this->customer;
    }

    /**

     * @return null|Reference
     */
    public function getStagedQuote()
    {
        return $this->stagedQuote instanceof ReferenceBuilder ? $this->stagedQuote->build() : $this->stagedQuote;
    }

    /**

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
     * @param ?Reference $stagedQuote
     * @return $this
     */
    public function withStagedQuote(?Reference $stagedQuote)
    {
        $this->stagedQuote = $stagedQuote;

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
     * @deprecated use withStagedQuote() instead
     * @return $this
     */
    public function withStagedQuoteBuilder(?ReferenceBuilder $stagedQuote)
    {
        $this->stagedQuote = $stagedQuote;

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

    public function build(): QuoteLabel
    {
        return new QuoteLabelModel(
            $this->key,
            $this->customer instanceof ReferenceBuilder ? $this->customer->build() : $this->customer,
            $this->stagedQuote instanceof ReferenceBuilder ? $this->stagedQuote->build() : $this->stagedQuote,
            $this->quoteRequest instanceof ReferenceBuilder ? $this->quoteRequest->build() : $this->quoteRequest
        );
    }

    public static function of(): QuoteLabelBuilder
    {
        return new self();
    }
}
