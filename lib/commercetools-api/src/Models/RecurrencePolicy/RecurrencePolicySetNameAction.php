<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurrencePolicy;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RecurrencePolicySetNameAction extends RecurrencePolicyUpdateAction
{
    public const FIELD_NAME = 'name';

    /**
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;
}
