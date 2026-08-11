<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface McpServerSetToolOutputFormattingAction extends McpServerUpdateAction
{
    public const FIELD_TOOL_OUTPUT_FORMATTING = 'toolOutputFormatting';

    /**
     * <p>Value to set. If absent, the existing formatting is removed.</p>
     *

     * @return null|string
     */
    public function getToolOutputFormatting();

    /**
     * @param ?string $toolOutputFormatting
     */
    public function setToolOutputFormatting(?string $toolOutputFormatting): void;
}
