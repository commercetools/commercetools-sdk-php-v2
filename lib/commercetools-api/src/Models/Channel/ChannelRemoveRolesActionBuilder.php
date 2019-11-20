<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ChannelRemoveRolesAction>
 */
final class ChannelRemoveRolesActionBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $roles;

    /**
     * @return null|array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @return $this
     */
    public function withRoles(?array $roles)
    {
        $this->roles = $roles;

        return $this;
    }

    public function build(): ChannelRemoveRolesAction
    {
        return new ChannelRemoveRolesActionModel(
            $this->roles
        );
    }

    public static function of(): ChannelRemoveRolesActionBuilder
    {
        return new self();
    }
}
