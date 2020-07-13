<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StateChangeInitialAction extends StateUpdateAction
{
    public const FIELD_INITIAL = 'initial';

    /**
     * @return null|bool
     */
    public function getInitial();

    /**
     * @param ?bool $initial
     */
    public function setInitial(?bool $initial): void;
}
