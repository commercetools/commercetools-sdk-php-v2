<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\UpdateActionCollection;
use Commercetools\Types\Update;

interface ChannelUpdate extends Update
{
    /**
     * @return ChannelUpdateActionCollection
     */
    public function getActions();

    /**
     * @param ChannelUpdateActionCollection $actions
     * @return $this
     */
    public function setActions(UpdateActionCollection $actions);

}
