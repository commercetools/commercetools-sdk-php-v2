<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Quote\Quote;
use Commercetools\Api\Models\Quote\QuoteModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class QuoteCreatedMessagePayloadModel extends JsonObjectModel implements QuoteCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'QuoteCreated';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?Quote
     */
    protected $quote;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Quote $quote = null,
        ?string $type = null
    ) {
        $this->quote = $quote;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     * <p><a href="/../api/projects/quotes">Quote</a> that was created.</p>
     *
     *
     * @return null|Quote
     */
    public function getQuote()
    {
        if (is_null($this->quote)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_QUOTE);
            if (is_null($data)) {
                return null;
            }

            $this->quote = QuoteModel::of($data);
        }

        return $this->quote;
    }


    /**
     * @param ?Quote $quote
     */
    public function setQuote(?Quote $quote): void
    {
        $this->quote = $quote;
    }
}
