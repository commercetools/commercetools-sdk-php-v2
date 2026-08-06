<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface McpServerDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_AUTHENTICATION_MODE = 'authenticationMode';
    public const FIELD_STATE = 'state';
    public const FIELD_MCP_SERVER = 'mcpServer';

    /**
     * <p>User-defined unique identifier for the MCP Server. Must be unique within the Project.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the MCP Server.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Description of the MCP Server.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p>Determines how AI agents authenticate when connecting to the MCP Server.</p>
     *

     * @return null|string
     */
    public function getAuthenticationMode();

    /**
     * <p>State of the MCP Server.</p>
     *

     * @return null|string
     */
    public function getState();

    /**
     * <p>Configuration of the MCP Server connection.</p>
     *

     * @return null|McpServerConfigDraft
     */
    public function getMcpServer();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?string $authenticationMode
     */
    public function setAuthenticationMode(?string $authenticationMode): void;

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void;

    /**
     * @param ?McpServerConfigDraft $mcpServer
     */
    public function setMcpServer(?McpServerConfigDraft $mcpServer): void;
}
