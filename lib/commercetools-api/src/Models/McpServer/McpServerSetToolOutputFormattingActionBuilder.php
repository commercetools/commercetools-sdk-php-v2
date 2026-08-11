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
 * @implements Builder<McpServerSetToolOutputFormattingAction>
 */
final class McpServerSetToolOutputFormattingActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $toolOutputFormatting;

    /**
     * <p>Value to set. If absent, the existing formatting is removed.</p>
     *

     * @return null|string
     */
    public function getToolOutputFormatting()
    {
        return $this->toolOutputFormatting;
    }

    /**
     * @param ?string $toolOutputFormatting
     * @return $this
     */
    public function withToolOutputFormatting(?string $toolOutputFormatting)
    {
        $this->toolOutputFormatting = $toolOutputFormatting;

        return $this;
    }


    public function build(): McpServerSetToolOutputFormattingAction
    {
        return new McpServerSetToolOutputFormattingActionModel(
            $this->toolOutputFormatting
        );
    }

    public static function of(): McpServerSetToolOutputFormattingActionBuilder
    {
        return new self();
    }
}
