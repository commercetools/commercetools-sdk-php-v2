<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface McpServerSetJsonOutputFilteringAction extends McpServerUpdateAction
{
    public const FIELD_JSON_OUTPUT_FILTERING = 'jsonOutputFiltering';

    /**
     * <p>Value to set. The existing configuration is entirely replaced with this value. If absent, the existing filtering configuration is removed.</p>
     *

     * @return null|McpServerJsonOutputFiltering
     */
    public function getJsonOutputFiltering();

    /**
     * @param ?McpServerJsonOutputFiltering $jsonOutputFiltering
     */
    public function setJsonOutputFiltering(?McpServerJsonOutputFiltering $jsonOutputFiltering): void;
}
