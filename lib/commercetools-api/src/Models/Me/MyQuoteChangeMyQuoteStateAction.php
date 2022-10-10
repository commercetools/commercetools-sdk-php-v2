<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface MyQuoteChangeMyQuoteStateAction extends MyQuoteUpdateAction
{
    public const FIELD_QUOTE_STATE = 'quoteState';

    /**
     * <p>New state to be set for the Quote.</p>
     *

     * @return null|string
     */
    public function getQuoteState();

    /**
     * @param ?string $quoteState
     */
    public function setQuoteState(?string $quoteState): void;
}
