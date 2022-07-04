<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedQuoteChangeStagedQuoteStateAction extends StagedQuoteUpdateAction
{
    public const FIELD_STAGED_QUOTE_STATE = 'stagedQuoteState';

    /**
     * <p>The new quote staged state to be set for the Quote Staged.</p>
     *
     * @return null|string
     */
    public function getStagedQuoteState();

    /**
     * @param ?string $stagedQuoteState
     */
    public function setStagedQuoteState(?string $stagedQuoteState): void;
}
