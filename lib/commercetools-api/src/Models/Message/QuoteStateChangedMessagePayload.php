<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface QuoteStateChangedMessagePayload extends MessagePayload
{
    public const FIELD_QUOTE_STATE = 'quoteState';
    public const FIELD_OLD_QUOTE_STATE = 'oldQuoteState';

    /**
     * <p>Predefined states tracking the status of the Quote.</p>
     *
     * @return null|string
     */
    public function getQuoteState();

    /**
     * <p>Predefined states tracking the status of the Quote.</p>
     *
     * @return null|string
     */
    public function getOldQuoteState();

    /**
     * @param ?string $quoteState
     */
    public function setQuoteState(?string $quoteState): void;

    /**
     * @param ?string $oldQuoteState
     */
    public function setOldQuoteState(?string $oldQuoteState): void;
}
