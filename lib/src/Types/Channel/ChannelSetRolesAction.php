<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

interface ChannelSetRolesAction extends ChannelUpdateAction {
    const FIELD_ROLES = 'roles';

    /**
     * @return ChannelRoleEnumCollection
     */
    public function getRoles();

    /**
     * @param ChannelRoleEnumCollection $roles
     * @return $this
     */
    public function setRoles(ChannelRoleEnumCollection $roles);

}
