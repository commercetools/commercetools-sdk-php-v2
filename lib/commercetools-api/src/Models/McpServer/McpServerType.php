<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface McpServerType extends JsonObject
{
    public const FIELD_TYPE = 'type';
    public const FIELD_MAJOR_VERSION = 'majorVersion';
    public const FIELD_TOOLS = 'tools';

    /**
     * <p>Identifier of the MCP Server type, such as <code>CommerceMCP</code>.</p>
     *

     * @return null|string
     */
    public function getType();

    /**
     * <p>Major version of the MCP Server type, such as <code>v4</code>.</p>
     *

     * @return null|string
     */
    public function getMajorVersion();

    /**
     * <p>Tools available for this MCP Server type and major version.</p>
     *

     * @return null|McpServerTypeToolCollection
     */
    public function getTools();

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void;

    /**
     * @param ?string $majorVersion
     */
    public function setMajorVersion(?string $majorVersion): void;

    /**
     * @param ?McpServerTypeToolCollection $tools
     */
    public function setTools(?McpServerTypeToolCollection $tools): void;
}
