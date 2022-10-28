<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Quote\Quote;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface QuoteCreatedMessage extends Message
{
    public const FIELD_QUOTE = 'quote';

    /**
     * <p><a href="/../api/projects/quotes">Quote</a> that was created.</p>
     *

     * @return null|Quote
     */
    public function getQuote();

    /**
     * @param ?Quote $quote
     */
    public function setQuote(?Quote $quote): void;
}
