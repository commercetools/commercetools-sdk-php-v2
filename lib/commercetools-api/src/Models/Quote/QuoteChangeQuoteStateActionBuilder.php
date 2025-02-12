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
 * @implements Builder<QuoteChangeQuoteStateAction>
 */
final class QuoteChangeQuoteStateActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $quoteState;

    /**
     * <p>New state to be set for the Quote, except <code>DeclinedForRenegotiation</code>. The <code>DeclinedForRenegotiation</code> state can be set only when performing a <a href="ctp:api:type:QuoteRequestQuoteRenegotiationAction">renegotiation request</a>.</p>
     *

     * @return null|string
     */
    public function getQuoteState()
    {
        return $this->quoteState;
    }

    /**
     * @param ?string $quoteState
     * @return $this
     */
    public function withQuoteState(?string $quoteState)
    {
        $this->quoteState = $quoteState;

        return $this;
    }


    public function build(): QuoteChangeQuoteStateAction
    {
        return new QuoteChangeQuoteStateActionModel(
            $this->quoteState
        );
    }

    public static function of(): QuoteChangeQuoteStateActionBuilder
    {
        return new self();
    }
}
