<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\QuoteRequest\QuoteRequest;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<QuoteRequestCreatedMessagePayload>
 */
final class QuoteRequestCreatedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|QuoteRequest|QuoteRequestBuilder
     */
    private $quoteRequest;

    /**
     * <p><a href="/../api/projects/quote-requests">Quote Request</a> that was created.</p>
     *

     * @return null|QuoteRequest
     */
    public function getQuoteRequest()
    {
        return $this->quoteRequest instanceof QuoteRequestBuilder ? $this->quoteRequest->build() : $this->quoteRequest;
    }

    /**
     * @param ?QuoteRequest $quoteRequest
     * @return $this
     */
    public function withQuoteRequest(?QuoteRequest $quoteRequest)
    {
        $this->quoteRequest = $quoteRequest;

        return $this;
    }

    /**
     * @deprecated use withQuoteRequest() instead
     * @return $this
     */
    public function withQuoteRequestBuilder(?QuoteRequestBuilder $quoteRequest)
    {
        $this->quoteRequest = $quoteRequest;

        return $this;
    }

    public function build(): QuoteRequestCreatedMessagePayload
    {
        return new QuoteRequestCreatedMessagePayloadModel(
            $this->quoteRequest instanceof QuoteRequestBuilder ? $this->quoteRequest->build() : $this->quoteRequest
        );
    }

    public static function of(): QuoteRequestCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
