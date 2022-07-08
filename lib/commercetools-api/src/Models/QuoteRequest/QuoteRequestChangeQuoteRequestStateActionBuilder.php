<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\QuoteRequest;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<QuoteRequestChangeQuoteRequestStateAction>
 */
final class QuoteRequestChangeQuoteRequestStateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $quoteRequestState;

    /**
     * <p>The new state to be set for the Quote Request.</p>
     *
     * @return null|string
     */
    public function getQuoteRequestState()
    {
        return $this->quoteRequestState;
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


    public function build(): QuoteRequestChangeQuoteRequestStateAction
    {
        return new QuoteRequestChangeQuoteRequestStateActionModel(
            $this->quoteRequestState
        );
    }

    public static function of(): QuoteRequestChangeQuoteRequestStateActionBuilder
    {
        return new self();
    }
}
