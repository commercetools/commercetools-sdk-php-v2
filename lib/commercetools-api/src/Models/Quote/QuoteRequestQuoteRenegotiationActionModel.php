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
final class QuoteRequestQuoteRenegotiationActionModel extends JsonObjectModel implements QuoteRequestQuoteRenegotiationAction
{
    public const DISCRIMINATOR_VALUE = 'requestQuoteRenegotiation';
    /**

     * @var ?string
     */
    protected $action;

    /**

     * @var ?string
     */
    protected $buyerComment;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $buyerComment = null
    ) {
        $this->buyerComment = $buyerComment;
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
     * <p>Message from the <a href="/api/quotes-overview#buyer">Buyer</a> regarding the Quote renegotiation request.</p>
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
