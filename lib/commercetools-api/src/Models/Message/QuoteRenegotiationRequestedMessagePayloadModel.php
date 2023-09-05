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
final class QuoteRenegotiationRequestedMessagePayloadModel extends JsonObjectModel implements QuoteRenegotiationRequestedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'QuoteRenegotiationRequested';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $buyerComment;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $buyerComment = null,
        ?string $type = null
    ) {
        $this->buyerComment = $buyerComment;
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
     * <p>Message from the <a href="/api/quotes-overview#buyer">Buyer</a> regarding the Quote renegotiation request.</p>
     *
     *
     * @return null|string
     */
    public function getBuyerComment()
    {
        if (is_null($this->buyerComment)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_BUYER_COMMENT);
            if (is_null($data)) {
                return null;
            }
            $this->buyerComment = (string) $data;
        }

        return $this->buyerComment;
    }


    /**
     * @param ?string $buyerComment
     */
    public function setBuyerComment(?string $buyerComment): void
    {
        $this->buyerComment = $buyerComment;
    }
}
