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
final class QuoteStateChangedMessagePayloadModel extends JsonObjectModel implements QuoteStateChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'QuoteStateChanged';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $quoteState;

    /**
     * @var ?string
     */
    protected $oldQuoteState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $quoteState = null,
        ?string $oldQuoteState = null
    ) {
        $this->quoteState = $quoteState;
        $this->oldQuoteState = $oldQuoteState;
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
     * <p>Predefined states tracking the status of the Quote.</p>
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
     * <p>Predefined states tracking the status of the Quote.</p>
     *
     * @return null|string
     */
    public function getOldQuoteState()
    {
        if (is_null($this->oldQuoteState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_QUOTE_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->oldQuoteState = (string) $data;
        }

        return $this->oldQuoteState;
    }


    /**
     * @param ?string $quoteState
     */
    public function setQuoteState(?string $quoteState): void
    {
        $this->quoteState = $quoteState;
    }

    /**
     * @param ?string $oldQuoteState
     */
    public function setOldQuoteState(?string $oldQuoteState): void
    {
        $this->oldQuoteState = $oldQuoteState;
    }
}
