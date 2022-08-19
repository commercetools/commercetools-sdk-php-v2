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
 * @implements Builder<QuoteStateChangedMessagePayload>
 */
final class QuoteStateChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $quoteState;

    /**

     * @var ?string
     */
    private $oldQuoteState;

    /**
     * <p>State of the Quote after the <a href="ctp:api:type:QuoteChangeQuoteStateAction">Change Quote State</a> update action.</p>
     *

     * @return null|string
     */
    public function getQuoteState()
    {
        return $this->quoteState;
    }

    /**
     * <p>State of the Quote before the <a href="ctp:api:type:QuoteChangeQuoteStateAction">Change Quote State</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldQuoteState()
    {
        return $this->oldQuoteState;
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

    /**
     * @param ?string $oldQuoteState
     * @return $this
     */
    public function withOldQuoteState(?string $oldQuoteState)
    {
        $this->oldQuoteState = $oldQuoteState;

        return $this;
    }


    public function build(): QuoteStateChangedMessagePayload
    {
        return new QuoteStateChangedMessagePayloadModel(
            $this->quoteState,
            $this->oldQuoteState
        );
    }

    public static function of(): QuoteStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}
