<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Channel\ChannelUpdateActionModel;

class ChannelAddRolesActionModel extends ChannelUpdateActionModel implements ChannelAddRolesAction {
    const DISCRIMINATOR_VALUE = 'addRoles';

    /**
     * @var array
     */
    protected $roles;

    /**
     * @return array
     */
    public function getRoles()
    {
        if (is_null($this->roles)) {
            $value = $this->raw(ChannelAddRolesAction::FIELD_ROLES);
            $value = (array)$value;
            $this->roles = $value;
        }
        return $this->roles;
    }

    /**
     * @param array $roles
     * @return $this
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;

        return $this;
    }

}
