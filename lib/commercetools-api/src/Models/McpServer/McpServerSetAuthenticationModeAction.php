<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface McpServerSetAuthenticationModeAction extends McpServerUpdateAction
{
    public const FIELD_AUTHENTICATION_MODE = 'authenticationMode';

    /**
     * <p>New authentication mode to set.</p>
     *

     * @return null|string
     */
    public function getAuthenticationMode();

    /**
     * @param ?string $authenticationMode
     */
    public function setAuthenticationMode(?string $authenticationMode): void;
}
