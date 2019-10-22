<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\JsonObject;

interface ImportRequest extends JsonObject
{
    const DISCRIMINATOR_FIELD = 'type';
    const FIELD_TYPE = 'type';

    /**
     * <p>The type of the import resource.</p>.
     *
     * @return null|string
     */
    public function getType();

    public function setType(?string $type): void;
}
