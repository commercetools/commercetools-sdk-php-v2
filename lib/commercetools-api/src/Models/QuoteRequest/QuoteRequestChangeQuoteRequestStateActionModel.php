<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\QuoteRequest;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class QuoteRequestChangeQuoteRequestStateActionModel extends JsonObjectModel implements QuoteRequestChangeQuoteRequestStateAction
{
    public const DISCRIMINATOR_VALUE = 'changeQuoteRequestState';
    /**

     * @var ?string
     */
    protected $action;

    /**

     * @var ?string
     */
    protected $quoteRequestState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $quoteRequestState = null
    ) {
        $this->quoteRequestState = $quoteRequestState;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**

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
     * <p>The new state to be set for the Quote Request.</p>
     *

     * @return null|string
     */
    public function getQuoteRequestState()
    {
        if (is_null($this->quoteRequestState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_QUOTE_REQUEST_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->quoteRequestState = (string) $data;
        }

        return $this->quoteRequestState;
    }


    /**
     * @param ?string $quoteRequestState
     */
    public function setQuoteRequestState(?string $quoteRequestState): void
    {
        $this->quoteRequestState = $quoteRequestState;
    }
}
