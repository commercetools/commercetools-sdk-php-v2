<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface McpServerSetToolCustomizationsAction extends McpServerUpdateAction
{
    public const FIELD_TOOL_CUSTOMIZATIONS = 'toolCustomizations';

    /**
     * <p>New list of tool customizations. Replaces the existing list entirely.</p>
     *

     * @return null|ToolCustomizationCollection
     */
    public function getToolCustomizations();

    /**
     * @param ?ToolCustomizationCollection $toolCustomizations
     */
    public function setToolCustomizations(?ToolCustomizationCollection $toolCustomizations): void;
}
