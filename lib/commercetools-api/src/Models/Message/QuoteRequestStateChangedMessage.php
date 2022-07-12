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
     * <p>Predefined states tracking the status of the Quote Request in the negotiation process.</p>
     *

     * @return null|string
     */
    public function getQuoteRequestState();

    /**
     * <p>Predefined states tracking the status of the Quote Request in the negotiation process.</p>
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
