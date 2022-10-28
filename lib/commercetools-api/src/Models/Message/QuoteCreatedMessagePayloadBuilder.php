<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Quote\Quote;
use Commercetools\Api\Models\Quote\QuoteBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<QuoteCreatedMessagePayload>
 */
final class QuoteCreatedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|Quote|QuoteBuilder
     */
    private $quote;

    /**
     * <p><a href="/../api/projects/quotes">Quote</a> that was created.</p>
     *

     * @return null|Quote
     */
    public function getQuote()
    {
        return $this->quote instanceof QuoteBuilder ? $this->quote->build() : $this->quote;
    }

    /**
     * @param ?Quote $quote
     * @return $this
     */
    public function withQuote(?Quote $quote)
    {
        $this->quote = $quote;

        return $this;
    }

    /**
     * @deprecated use withQuote() instead
     * @return $this
     */
    public function withQuoteBuilder(?QuoteBuilder $quote)
    {
        $this->quote = $quote;

        return $this;
    }

    public function build(): QuoteCreatedMessagePayload
    {
        return new QuoteCreatedMessagePayloadModel(
            $this->quote instanceof QuoteBuilder ? $this->quote->build() : $this->quote
        );
    }

    public static function of(): QuoteCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
