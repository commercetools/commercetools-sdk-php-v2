<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ReferenceModel;

use Commercetools\Types\Common\Reference;

class ChannelReferenceModel extends ReferenceModel implements ChannelReference {
    const DISCRIMINATOR_VALUE = 'channel';

    /**
     * @var Channel
     */
    protected $obj;

    /**
     * @return Channel
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            $value = $this->raw(ChannelReference::FIELD_OBJ);
            if (is_null($value)) {
                return $this->mapData(Channel::class, null);
            }
            $value = $this->mapData(Channel::class, $value);

            $this->obj = $value;
        }
        return $this->obj;
    }

    /**
     * @param Channel $obj
     * @return $this
     */
    public function setObj(Channel $obj)
    {
        $this->obj = $obj;

        return $this;
    }

}
