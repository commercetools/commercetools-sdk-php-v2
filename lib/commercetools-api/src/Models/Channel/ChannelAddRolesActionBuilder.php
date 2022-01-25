<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ChannelAddRolesAction>
 */
final class ChannelAddRolesActionBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $roles;

    /**
     * <p>Value to append to the array.</p>
     *
     * @return null|array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param ?array $roles
     * @return $this
     */
    public function withRoles(?array $roles)
    {
        $this->roles = $roles;

        return $this;
    }


    public function build(): ChannelAddRolesAction
    {
        return new ChannelAddRolesActionModel(
            $this->roles
        );
    }

    public static function of(): ChannelAddRolesActionBuilder
    {
        return new self();
    }
}
