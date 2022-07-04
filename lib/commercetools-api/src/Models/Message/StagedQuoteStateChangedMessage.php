<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedQuoteStateChangedMessage extends Message
{
    public const FIELD_STAGED_QUOTE_STATE = 'stagedQuoteState';
    public const FIELD_OLD_STAGED_QUOTE_STATE = 'oldStagedQuoteState';

    /**
     * <p>Predefined states tracking the status of the Staged Quote.</p>
     *
     * @return null|string
     */
    public function getStagedQuoteState();

    /**
     * <p>Predefined states tracking the status of the Staged Quote.</p>
     *
     * @return null|string
     */
    public function getOldStagedQuoteState();

    /**
     * @param ?string $stagedQuoteState
     */
    public function setStagedQuoteState(?string $stagedQuoteState): void;

    /**
     * @param ?string $oldStagedQuoteState
     */
    public function setOldStagedQuoteState(?string $oldStagedQuoteState): void;
}
