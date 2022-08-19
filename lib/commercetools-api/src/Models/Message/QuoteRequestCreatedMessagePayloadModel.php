<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\QuoteRequest\QuoteRequest;
use Commercetools\Api\Models\QuoteRequest\QuoteRequestModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class QuoteRequestCreatedMessagePayloadModel extends JsonObjectModel implements QuoteRequestCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'QuoteRequestCreated';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?QuoteRequest
     */
    protected $quoteRequest;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?QuoteRequest $quoteRequest = null
    ) {
        $this->quoteRequest = $quoteRequest;
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
     * <p><a href="/../api/projects/quote-requests">Quote Request</a> that was created.</p>
     *

     * @return null|QuoteRequest
     */
    public function getQuoteRequest()
    {
        if (is_null($this->quoteRequest)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_QUOTE_REQUEST);
            if (is_null($data)) {
                return null;
            }

            $this->quoteRequest = QuoteRequestModel::of($data);
        }

        return $this->quoteRequest;
    }


    /**
     * @param ?QuoteRequest $quoteRequest
     */
    public function setQuoteRequest(?QuoteRequest $quoteRequest): void
    {
        $this->quoteRequest = $quoteRequest;
    }
}
