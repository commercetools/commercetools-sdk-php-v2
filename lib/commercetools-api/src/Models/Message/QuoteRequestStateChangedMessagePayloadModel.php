<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class QuoteRequestStateChangedMessagePayloadModel extends JsonObjectModel implements QuoteRequestStateChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'QuoteRequestStateChanged';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?string
     */
    protected $quoteRequestState;

    /**

     * @var ?string
     */
    protected $oldQuoteRequestState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $quoteRequestState = null,
        ?string $oldQuoteRequestState = null
    ) {
        $this->quoteRequestState = $quoteRequestState;
        $this->oldQuoteRequestState = $oldQuoteRequestState;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**

     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Predefined states tracking the status of the Quote Request in the negotiation process.</p>
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
     * <p>Predefined states tracking the status of the Quote Request in the negotiation process.</p>
     *

     * @return null|string
     */
    public function getOldQuoteRequestState()
    {
        if (is_null($this->oldQuoteRequestState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_QUOTE_REQUEST_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->oldQuoteRequestState = (string) $data;
        }

        return $this->oldQuoteRequestState;
    }


    /**
     * @param ?string $quoteRequestState
     */
    public function setQuoteRequestState(?string $quoteRequestState): void
    {
        $this->quoteRequestState = $quoteRequestState;
    }

    /**
     * @param ?string $oldQuoteRequestState
     */
    public function setOldQuoteRequestState(?string $oldQuoteRequestState): void
    {
        $this->oldQuoteRequestState = $oldQuoteRequestState;
    }
}
