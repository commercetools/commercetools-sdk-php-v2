<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

interface ChannelRemoveRolesAction extends ChannelUpdateAction {
    const FIELD_ROLES = 'roles';

    /**
     * @return array
     */
    public function getRoles();

    /**
     * @param array $roles
     * @return $this
     */
    public function setRoles(array $roles);

}
