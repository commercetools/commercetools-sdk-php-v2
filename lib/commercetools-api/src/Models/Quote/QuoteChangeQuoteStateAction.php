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
     * <p>New state to be set for the Quote, except <code>DeclinedForRenegotiation</code>. The <code>DeclinedForRenegotiation</code> state can be set only when performing a <a href="ctp:api:type:QuoteRequestQuoteRenegotiationAction">renegotiation request</a>.</p>
     *

     * @return null|string
     */
    public function getQuoteState();

    /**
     * @param ?string $quoteState
     */
    public function setQuoteState(?string $quoteState): void;
}
