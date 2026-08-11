<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class McpServerTypeModel extends JsonObjectModel implements McpServerType
{
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $majorVersion;

    /**
     *
     * @var ?McpServerTypeToolCollection
     */
    protected $tools;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $type = null,
        ?string $majorVersion = null,
        ?McpServerTypeToolCollection $tools = null
    ) {
        $this->type = $type;
        $this->majorVersion = $majorVersion;
        $this->tools = $tools;
    }

    /**
     * <p>Identifier of the MCP Server type, such as <code>CommerceMCP</code>.</p>
     *
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Major version of the MCP Server type, such as <code>v4</code>.</p>
     *
     *
     * @return null|string
     */
    public function getMajorVersion()
    {
        if (is_null($this->majorVersion)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MAJOR_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->majorVersion = (string) $data;
        }

        return $this->majorVersion;
    }

    /**
     * <p>Tools available for this MCP Server type and major version.</p>
     *
     *
     * @return null|McpServerTypeToolCollection
     */
    public function getTools()
    {
        if (is_null($this->tools)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TOOLS);
            if (is_null($data)) {
                return null;
            }
            $this->tools = McpServerTypeToolCollection::fromArray($data);
        }

        return $this->tools;
    }


    /**
     * @param ?string $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param ?string $majorVersion
     */
    public function setMajorVersion(?string $majorVersion): void
    {
        $this->majorVersion = $majorVersion;
    }

    /**
     * @param ?McpServerTypeToolCollection $tools
     */
    public function setTools(?McpServerTypeToolCollection $tools): void
    {
        $this->tools = $tools;
    }
}
