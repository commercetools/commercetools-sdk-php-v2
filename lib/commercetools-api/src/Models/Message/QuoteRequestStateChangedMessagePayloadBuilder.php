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
 * @implements Builder<QuoteRequestStateChangedMessagePayload>
 */
final class QuoteRequestStateChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $quoteRequestState;

    /**

     * @var ?string
     */
    private $oldQuoteRequestState;

    /**
     * <p>Predefined states tracking the status of the Quote Request in the negotiation process.</p>
     *

     * @return null|string
     */
    public function getQuoteRequestState()
    {
        return $this->quoteRequestState;
    }

    /**
     * <p>Predefined states tracking the status of the Quote Request in the negotiation process.</p>
     *

     * @return null|string
     */
    public function getOldQuoteRequestState()
    {
        return $this->oldQuoteRequestState;
    }

    /**
     * @param ?string $quoteRequestState
     * @return $this
     */
    public function withQuoteRequestState(?string $quoteRequestState)
    {
        $this->quoteRequestState = $quoteRequestState;

        return $this;
    }

    /**
     * @param ?string $oldQuoteRequestState
     * @return $this
     */
    public function withOldQuoteRequestState(?string $oldQuoteRequestState)
    {
        $this->oldQuoteRequestState = $oldQuoteRequestState;

        return $this;
    }


    public function build(): QuoteRequestStateChangedMessagePayload
    {
        return new QuoteRequestStateChangedMessagePayloadModel(
            $this->quoteRequestState,
            $this->oldQuoteRequestState
        );
    }

    public static function of(): QuoteRequestStateChangedMessagePayloadBuilder
    {
        return new self();
    }
}
