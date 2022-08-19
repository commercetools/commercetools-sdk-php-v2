<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\QuoteRequest\QuoteRequest;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface QuoteRequestCreatedMessagePayload extends MessagePayload
{
    public const FIELD_QUOTE_REQUEST = 'quoteRequest';

    /**
     * <p><a href="/../api/projects/quote-requests">Quote Request</a> that was created.</p>
     *

     * @return null|QuoteRequest
     */
    public function getQuoteRequest();

    /**
     * @param ?QuoteRequest $quoteRequest
     */
    public function setQuoteRequest(?QuoteRequest $quoteRequest): void;
}
