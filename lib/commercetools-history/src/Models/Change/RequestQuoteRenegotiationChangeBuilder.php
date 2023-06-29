<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RequestQuoteRenegotiationChange>
 */
final class RequestQuoteRenegotiationChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?string
     */
    private $previousValue;

    /**

     * @var ?string
     */
    private $nextValue;

    /**

     * @var ?string
     */
    private $buyerComment;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|string
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|string
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * <p>Message from the <a href="/../api/quotes-overview#buyer">Buyer</a> regarding the <a href="ctp:api:type:Quote">Quote</a> renegotiation request.</p>
     *

     * @return null|string
     */
    public function getBuyerComment()
    {
        return $this->buyerComment;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?string $previousValue
     * @return $this
     */
    public function withPreviousValue(?string $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?string $nextValue
     * @return $this
     */
    public function withNextValue(?string $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?string $buyerComment
     * @return $this
     */
    public function withBuyerComment(?string $buyerComment)
    {
        $this->buyerComment = $buyerComment;

        return $this;
    }


    public function build(): RequestQuoteRenegotiationChange
    {
        return new RequestQuoteRenegotiationChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->buyerComment
        );
    }

    public static function of(): RequestQuoteRenegotiationChangeBuilder
    {
        return new self();
    }
}
