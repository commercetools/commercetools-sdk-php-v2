<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<QuoteRequestQuoteRenegotiationAction>
 */
final class QuoteRequestQuoteRenegotiationActionBuilder implements Builder
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


    public function build(): QuoteRequestQuoteRenegotiationAction
    {
        return new QuoteRequestQuoteRenegotiationActionModel(
            $this->buyerComment
        );
    }

    public static function of(): QuoteRequestQuoteRenegotiationActionBuilder
    {
        return new self();
    }
}
