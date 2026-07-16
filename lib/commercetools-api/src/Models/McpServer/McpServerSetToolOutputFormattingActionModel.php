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
final class McpServerSetToolOutputFormattingActionModel extends JsonObjectModel implements McpServerSetToolOutputFormattingAction
{
    public const DISCRIMINATOR_VALUE = 'setToolOutputFormatting';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $toolOutputFormatting;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $toolOutputFormatting = null,
        ?string $action = null
    ) {
        $this->toolOutputFormatting = $toolOutputFormatting;
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
     * <p>Value to set. If absent, the existing formatting is removed.</p>
     *
     *
     * @return null|string
     */
    public function getToolOutputFormatting()
    {
        if (is_null($this->toolOutputFormatting)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TOOL_OUTPUT_FORMATTING);
            if (is_null($data)) {
                return null;
            }
            $this->toolOutputFormatting = (string) $data;
        }

        return $this->toolOutputFormatting;
    }


    /**
     * @param ?string $toolOutputFormatting
     */
    public function setToolOutputFormatting(?string $toolOutputFormatting): void
    {
        $this->toolOutputFormatting = $toolOutputFormatting;
    }
}
