<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface Address extends BaseAddress
{

    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Custom Fields defined for the Address.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @param ?CustomFields $custom
     */
    public function setCustom(?CustomFields $custom): void;
}
