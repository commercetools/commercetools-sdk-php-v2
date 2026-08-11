<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface McpServerAddToolCustomizationAction extends McpServerUpdateAction
{
    public const FIELD_TOOL_CUSTOMIZATION = 'toolCustomization';

    /**
     * <p>Tool customization to add.</p>
     *

     * @return null|ToolCustomization
     */
    public function getToolCustomization();

    /**
     * @param ?ToolCustomization $toolCustomization
     */
    public function setToolCustomization(?ToolCustomization $toolCustomization): void;
}
