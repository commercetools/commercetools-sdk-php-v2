<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<McpServerDraft>
 */
final class McpServerDraftBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $description;

    /**

     * @var ?string
     */
    private $authenticationMode;

    /**

     * @var ?string
     */
    private $state;

    /**

     * @var null|McpServerConfigDraft|McpServerConfigDraftBuilder
     */
    private $mcpServer;

    /**
     * <p>User-defined unique identifier for the MCP Server. Must be unique within the Project.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Name of the MCP Server.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Description of the MCP Server.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * <p>Determines how AI agents authenticate when connecting to the MCP Server.</p>
     *

     * @return null|string
     */
    public function getAuthenticationMode()
    {
        return $this->authenticationMode;
    }

    /**
     * <p>State of the MCP Server.</p>
     *

     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p>Configuration of the MCP Server connection.</p>
     *

     * @return null|McpServerConfigDraft
     */
    public function getMcpServer()
    {
        return $this->mcpServer instanceof McpServerConfigDraftBuilder ? $this->mcpServer->build() : $this->mcpServer;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?LocalizedString $description
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param ?string $authenticationMode
     * @return $this
     */
    public function withAuthenticationMode(?string $authenticationMode)
    {
        $this->authenticationMode = $authenticationMode;

        return $this;
    }

    /**
     * @param ?string $state
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?McpServerConfigDraft $mcpServer
     * @return $this
     */
    public function withMcpServer(?McpServerConfigDraft $mcpServer)
    {
        $this->mcpServer = $mcpServer;

        return $this;
    }

    /**
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @deprecated use withDescription() instead
     * @return $this
     */
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @deprecated use withMcpServer() instead
     * @return $this
     */
    public function withMcpServerBuilder(?McpServerConfigDraftBuilder $mcpServer)
    {
        $this->mcpServer = $mcpServer;

        return $this;
    }

    public function build(): McpServerDraft
    {
        return new McpServerDraftModel(
            $this->key,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description,
            $this->authenticationMode,
            $this->state,
            $this->mcpServer instanceof McpServerConfigDraftBuilder ? $this->mcpServer->build() : $this->mcpServer
        );
    }

    public static function of(): McpServerDraftBuilder
    {
        return new self();
    }
}
