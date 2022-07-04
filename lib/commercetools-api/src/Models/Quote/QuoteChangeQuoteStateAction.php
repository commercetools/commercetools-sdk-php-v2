<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface QuoteChangeQuoteStateAction extends QuoteUpdateAction
{
    public const FIELD_QUOTE_STATE = 'quoteState';

    /**
     * <p>The new quote state to be set for the Quote.</p>
     *
     * @return null|string
     */
    public function getQuoteState();

    /**
     * @param ?string $quoteState
     */
    public function setQuoteState(?string $quoteState): void;
}
