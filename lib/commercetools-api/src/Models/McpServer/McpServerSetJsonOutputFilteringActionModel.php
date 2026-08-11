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
final class McpServerSetJsonOutputFilteringActionModel extends JsonObjectModel implements McpServerSetJsonOutputFilteringAction
{
    public const DISCRIMINATOR_VALUE = 'setJsonOutputFiltering';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?McpServerJsonOutputFiltering
     */
    protected $jsonOutputFiltering;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?McpServerJsonOutputFiltering $jsonOutputFiltering = null,
        ?string $action = null
    ) {
        $this->jsonOutputFiltering = $jsonOutputFiltering;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>Identifies the update action to perform, such as <code>addTool</code>, <code>removeTool</code>, or <code>setTools</code>.</p>
     *
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Value to set. The existing configuration is entirely replaced with this value. If absent, the existing filtering configuration is removed.</p>
     *
     *
     * @return null|McpServerJsonOutputFiltering
     */
    public function getJsonOutputFiltering()
    {
        if (is_null($this->jsonOutputFiltering)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_JSON_OUTPUT_FILTERING);
            if (is_null($data)) {
                return null;
            }

            $this->jsonOutputFiltering = McpServerJsonOutputFilteringModel::of($data);
        }

        return $this->jsonOutputFiltering;
    }


    /**
     * @param ?McpServerJsonOutputFiltering $jsonOutputFiltering
     */
    public function setJsonOutputFiltering(?McpServerJsonOutputFiltering $jsonOutputFiltering): void
    {
        $this->jsonOutputFiltering = $jsonOutputFiltering;
    }
}
