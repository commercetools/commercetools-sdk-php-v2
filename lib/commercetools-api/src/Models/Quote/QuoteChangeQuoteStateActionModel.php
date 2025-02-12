<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Quote;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class QuoteChangeQuoteStateActionModel extends JsonObjectModel implements QuoteChangeQuoteStateAction
{
    public const DISCRIMINATOR_VALUE = 'changeQuoteState';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $quoteState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $quoteState = null,
        ?string $action = null
    ) {
        $this->quoteState = $quoteState;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>New state to be set for the Quote, except <code>DeclinedForRenegotiation</code>. The <code>DeclinedForRenegotiation</code> state can be set only when performing a <a href="ctp:api:type:QuoteRequestQuoteRenegotiationAction">renegotiation request</a>.</p>
     *
     *
     * @return null|string
     */
    public function getQuoteState()
    {
        if (is_null($this->quoteState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_QUOTE_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->quoteState = (string) $data;
        }

        return $this->quoteState;
    }


    /**
     * @param ?string $quoteState
     */
    public function setQuoteState(?string $quoteState): void
    {
        $this->quoteState = $quoteState;
    }
}
