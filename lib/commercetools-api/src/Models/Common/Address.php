<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

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
