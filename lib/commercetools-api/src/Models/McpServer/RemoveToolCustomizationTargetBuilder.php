<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RemoveToolCustomizationTarget>
 */
final class RemoveToolCustomizationTargetBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $tool;

    /**
     * <p>Name of the tool whose customization is removed.</p>
     *

     * @return null|string
     */
    public function getTool()
    {
        return $this->tool;
    }

    /**
     * @param ?string $tool
     * @return $this
     */
    public function withTool(?string $tool)
    {
        $this->tool = $tool;

        return $this;
    }


    public function build(): RemoveToolCustomizationTarget
    {
        return new RemoveToolCustomizationTargetModel(
            $this->tool
        );
    }

    public static function of(): RemoveToolCustomizationTargetBuilder
    {
        return new self();
    }
}
