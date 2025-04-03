<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ImportOperationRejectedEventData extends JsonObject
{
    public const FIELD_ID = 'id';

    /**
     * <p>The <code>id</code> of the Import Operation with the <code>rejected</code> state.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
