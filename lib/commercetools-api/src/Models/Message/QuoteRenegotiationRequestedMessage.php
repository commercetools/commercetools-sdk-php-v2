<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface QuoteRenegotiationRequestedMessage extends Message
{
    public const FIELD_BUYER_COMMENT = 'buyerComment';

    /**
     * <p>Message from the <a href="/api/quotes-overview#buyer">Buyer</a> regarding the Quote renegotiation request.</p>
     *

     * @return null|string
     */
    public function getBuyerComment();

    /**
     * @param ?string $buyerComment
     */
    public function setBuyerComment(?string $buyerComment): void;
}
