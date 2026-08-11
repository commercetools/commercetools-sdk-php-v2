<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class McpServerSetDescriptionActionModel extends JsonObjectModel implements McpServerSetDescriptionAction
{
    public const DISCRIMINATOR_VALUE = 'setDescription';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?LocalizedString
     */
    protected $description;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedString $description = null,
        ?string $action = null
    ) {
        $this->description = $description;
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
     * <p>Value to set. If omitted, the existing description is removed.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }


    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }
}
