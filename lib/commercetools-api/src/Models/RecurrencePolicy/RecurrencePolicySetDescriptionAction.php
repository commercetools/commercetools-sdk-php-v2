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

interface RecurrencePolicySetDescriptionAction extends RecurrencePolicyUpdateAction
{
    public const FIELD_DESCRIPTION = 'description';

    /**
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;
}
