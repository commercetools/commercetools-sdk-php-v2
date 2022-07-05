<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ZoneSetDescriptionAction extends ZoneUpdateAction
{
    public const FIELD_DESCRIPTION = 'description';

    /**
     * <p>Description of the Zone.</p>
     *

     * @return null|string
     */
    public function getDescription();

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void;
}
