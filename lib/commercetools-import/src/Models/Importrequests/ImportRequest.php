<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ImportRequest extends JsonObject
{
    public const DISCRIMINATOR_FIELD = 'type';
    public const FIELD_TYPE = 'type';

    /**
     * <p>The resource types that can be imported.</p>
     *

     * @return null|string
     */
    public function getType();
}
