<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionModel;

class ChannelSetRolesActionModel extends ChannelUpdateActionModel implements ChannelSetRolesAction {
    const DISCRIMINATOR_VALUE = 'setRoles';

    /**
     * @var ChannelRoleEnumCollection
     */
    protected $roles;

    /**
     * @return ChannelRoleEnumCollection
     */
    public function getRoles()
    {
        if (is_null($this->roles)) {
            $value = $this->raw(ChannelSetRolesAction::FIELD_ROLES);
            if (is_null($value)) {
                return $this->mapData(ChannelRoleEnumCollection::class, null);
            }
            $value = $this->mapData(ChannelRoleEnumCollection::class, $value);
            $this->roles = $value;
        }
        return $this->roles;
    }

    /**
     * @param ChannelRoleEnumCollection $roles
     * @return $this
     */
    public function setRoles(ChannelRoleEnumCollection $roles)
    {
        $this->roles = $roles;

        return $this;
    }

}
