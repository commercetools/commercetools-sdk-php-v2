<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ChannelSetRolesAction>
 */
final class ChannelSetRolesActionBuilder implements Builder
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

    public function build(): ChannelSetRolesAction
    {
        return new ChannelSetRolesActionModel(
            $this->roles
        );
    }

    public static function of(): ChannelSetRolesActionBuilder
    {
        return new self();
    }
}
