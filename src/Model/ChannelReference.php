<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ChannelReference extends Reference {
    protected $obj;
    const DISCRIMINATOR_VALUE = 'channel';

    /**
     * @return Channel
     */
    public function getObj(): Channel
    {
        if (is_null($this->obj)) {
            $value = $this->raw('obj');
            if (!is_null($value)) {
                $this->obj = Mapper::map($value, Channel::class);
            } else {
                return Mapper::map([], Channel::class);
            }
        }
        return $this->obj;
    }
                
}
