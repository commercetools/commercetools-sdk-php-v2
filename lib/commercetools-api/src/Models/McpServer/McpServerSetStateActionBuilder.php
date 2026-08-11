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
 * @implements Builder<McpServerSetStateAction>
 */
final class McpServerSetStateActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $state;

    /**
     * <p>New state to set.</p>
     *

     * @return null|string
     */
    public function getState()
    {
        return $this->state;
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


    public function build(): McpServerSetStateAction
    {
        return new McpServerSetStateActionModel(
            $this->state
        );
    }

    public static function of(): McpServerSetStateActionBuilder
    {
        return new self();
    }
}
