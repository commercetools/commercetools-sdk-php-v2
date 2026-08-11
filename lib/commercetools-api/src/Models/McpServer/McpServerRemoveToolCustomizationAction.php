<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface McpServerRemoveToolCustomizationAction extends McpServerUpdateAction
{
    public const FIELD_TOOL_CUSTOMIZATION = 'toolCustomization';

    /**
     * <p>Identifies the tool customization to remove by its tool name.</p>
     *

     * @return null|RemoveToolCustomizationTarget
     */
    public function getToolCustomization();

    /**
     * @param ?RemoveToolCustomizationTarget $toolCustomization
     */
    public function setToolCustomization(?RemoveToolCustomizationTarget $toolCustomization): void;
}
