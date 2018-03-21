<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Common\Reference;

interface ChannelReference extends Reference {
    const FIELD_OBJ = 'obj';

    /**
     * @return Channel
     */
    public function getObj();

    /**
     * @param Channel $obj
     * @return $this
     */
    public function setObj(Channel $obj);

}
