<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedQuoteTransitionStateAction extends StagedQuoteUpdateAction
{
    public const FIELD_STATE = 'state';
    public const FIELD_FORCE = 'force';

    /**
     * <p>Value to set.
     * If there is no State yet, the new State must be an initial State.</p>
     *

     * @return null|StateResourceIdentifier
     */
    public function getState();

    /**
     * <p>Switch validations on or off.</p>
     *

     * @return null|bool
     */
    public function getForce();

    /**
     * @param ?StateResourceIdentifier $state
     */
    public function setState(?StateResourceIdentifier $state): void;

    /**
     * @param ?bool $force
     */
    public function setForce(?bool $force): void;
}
