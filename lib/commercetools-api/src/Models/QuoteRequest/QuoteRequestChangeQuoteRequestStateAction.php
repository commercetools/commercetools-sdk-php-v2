<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\QuoteRequest;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface QuoteRequestChangeQuoteRequestStateAction extends QuoteRequestUpdateAction
{
    public const FIELD_QUOTE_REQUEST_STATE = 'quoteRequestState';

    /**
     * <p>New state to be set for the Quote Request.</p>
     *

     * @return null|string
     */
    public function getQuoteRequestState();

    /**
     * @param ?string $quoteRequestState
     */
    public function setQuoteRequestState(?string $quoteRequestState): void;
}
