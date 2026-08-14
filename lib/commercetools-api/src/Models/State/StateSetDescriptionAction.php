<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\State;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StateSetDescriptionAction extends StateUpdateAction
{
    public const FIELD_DESCRIPTION = 'description';

    /**
     * <p>Value to set.
     * If the new value is the same as the current value, an <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned.</p>
     * <p>Set to an empty object to remove any existing value.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;
}
