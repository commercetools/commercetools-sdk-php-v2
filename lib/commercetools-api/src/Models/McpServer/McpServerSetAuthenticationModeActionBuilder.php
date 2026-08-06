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
 * @implements Builder<McpServerSetAuthenticationModeAction>
 */
final class McpServerSetAuthenticationModeActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $authenticationMode;

    /**
     * <p>New authentication mode to set.</p>
     *

     * @return null|string
     */
    public function getAuthenticationMode()
    {
        return $this->authenticationMode;
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


    public function build(): McpServerSetAuthenticationModeAction
    {
        return new McpServerSetAuthenticationModeActionModel(
            $this->authenticationMode
        );
    }

    public static function of(): McpServerSetAuthenticationModeActionBuilder
    {
        return new self();
    }
}
