<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ChannelCollection extends Collection {

    /**
     * @param $index
     * @return Channel|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, Channel::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return Channel|null
     */
    public function current()
    {
        return parent::current();
    }
}
