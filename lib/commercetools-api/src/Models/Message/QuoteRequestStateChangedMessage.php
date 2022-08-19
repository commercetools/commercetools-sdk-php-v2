<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface QuoteRequestStateChangedMessage extends Message
{
    public const FIELD_QUOTE_REQUEST_STATE = 'quoteRequestState';
    public const FIELD_OLD_QUOTE_REQUEST_STATE = 'oldQuoteRequestState';

    /**
     * <p>State of the Quote Request after the <a href="ctp:api:type:QuoteRequestChangeQuoteRequestStateAction">Change Quote Request State</a> update action.</p>
     *

     * @return null|string
     */
    public function getQuoteRequestState();

    /**
     * <p>State of the Quote Request before the <a href="ctp:api:type:QuoteRequestChangeQuoteRequestStateAction">Change Quote Request State</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldQuoteRequestState();

    /**
     * @param ?string $quoteRequestState
     */
    public function setQuoteRequestState(?string $quoteRequestState): void;

    /**
     * @param ?string $oldQuoteRequestState
     */
    public function setOldQuoteRequestState(?string $oldQuoteRequestState): void;
}
