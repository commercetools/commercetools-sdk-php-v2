<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<QuoteRenegotiationRequestedMessagePayload>
 */
final class QuoteRenegotiationRequestedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $buyerComment;

    /**
     * <p>Message from the <a href="/api/quotes-overview#buyer">Buyer</a> regarding the Quote renegotiation request.</p>
     *

     * @return null|string
     */
    public function getBuyerComment()
    {
        return $this->buyerComment;
    }

    /**
     * @param ?string $buyerComment
     * @return $this
     */
    public function withBuyerComment(?string $buyerComment)
    {
        $this->buyerComment = $buyerComment;

        return $this;
    }


    public function build(): QuoteRenegotiationRequestedMessagePayload
    {
        return new QuoteRenegotiationRequestedMessagePayloadModel(
            $this->buyerComment
        );
    }

    public static function of(): QuoteRenegotiationRequestedMessagePayloadBuilder
    {
        return new self();
    }
}
