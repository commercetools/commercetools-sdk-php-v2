<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface McpServerSetStateAction extends McpServerUpdateAction
{
    public const FIELD_STATE = 'state';

    /**
     * <p>New state to set.</p>
     *

     * @return null|string
     */
    public function getState();

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void;
}
