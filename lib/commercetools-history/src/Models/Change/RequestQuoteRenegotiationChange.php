<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface RequestQuoteRenegotiationChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';
    public const FIELD_BUYER_COMMENT = 'buyerComment';

    /**

     * @return null|string
     */
    public function getType();

    /**

     * @return null|string
     */
    public function getChange();

    /**
     * <p>Value before the change.</p>
     *

     * @return null|string
     */
    public function getPreviousValue();

    /**
     * <p>Value after the change.</p>
     *

     * @return null|string
     */
    public function getNextValue();

    /**
     * <p>Message from the <a href="/../api/quotes-overview#buyer">Buyer</a> regarding the <a href="ctp:api:type:Quote">Quote</a> renegotiation request.</p>
     *

     * @return null|string
     */
    public function getBuyerComment();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?string $previousValue
     */
    public function setPreviousValue(?string $previousValue): void;

    /**
     * @param ?string $nextValue
     */
    public function setNextValue(?string $nextValue): void;

    /**
     * @param ?string $buyerComment
     */
    public function setBuyerComment(?string $buyerComment): void;
}
