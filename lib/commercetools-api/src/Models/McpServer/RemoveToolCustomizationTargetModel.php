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
final class RemoveToolCustomizationTargetModel extends JsonObjectModel implements RemoveToolCustomizationTarget
{
    /**
     *
     * @var ?string
     */
    protected $tool;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $tool = null
    ) {
        $this->tool = $tool;
    }

    /**
     * <p>Name of the tool whose customization is removed.</p>
     *
     *
     * @return null|string
     */
    public function getTool()
    {
        if (is_null($this->tool)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TOOL);
            if (is_null($data)) {
                return null;
            }
            $this->tool = (string) $data;
        }

        return $this->tool;
    }


    /**
     * @param ?string $tool
     */
    public function setTool(?string $tool): void
    {
        $this->tool = $tool;
    }
}
