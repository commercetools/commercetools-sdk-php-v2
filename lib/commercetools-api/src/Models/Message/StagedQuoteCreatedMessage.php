<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\StagedQuote\StagedQuote;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedQuoteCreatedMessage extends Message
{
    public const FIELD_STAGED_QUOTE = 'stagedQuote';

    /**
     * <p><a href="/../api/projects/staged-quotes">Staged Quote</a> that was created.</p>
     *

     * @return null|StagedQuote
     */
    public function getStagedQuote();

    /**
     * @param ?StagedQuote $stagedQuote
     */
    public function setStagedQuote(?StagedQuote $stagedQuote): void;
}
