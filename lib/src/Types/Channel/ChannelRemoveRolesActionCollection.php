<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollection;


interface ChannelRemoveRolesActionCollection extends ChannelUpdateActionCollection
{
    /**
     * @param $index
     * @return ChannelRemoveRolesAction
     */
    public function at($index);

    /**
     * @return ChannelRemoveRolesAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ChannelRemoveRolesAction
     */
    public function map($data, $index);
}
