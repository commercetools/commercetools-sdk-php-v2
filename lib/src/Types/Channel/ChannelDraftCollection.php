<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Base\Collection;

interface ChannelDraftCollection extends Collection {
    /**
     * @param $index
     * @return ChannelDraft
     */
    public function at($index);

    /**
     * @return ChannelDraft
     */
    public function current();

    /**
     * @param $data
     * @param $index
     * @return ChannelDraft
     */
    public function map($data, $index);
}
