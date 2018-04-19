<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Channel\ChannelUpdateActionCollection;


interface ChannelSetRolesActionCollection extends ChannelUpdateActionCollection
{
    /**
     * @param $index
     * @return ChannelSetRolesAction
     */
    public function at($index);

    /**
     * @return ChannelSetRolesAction
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ChannelSetRolesAction
     */
    public function map($data, $index);
}
