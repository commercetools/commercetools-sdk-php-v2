<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class AssetSourceCollection extends Collection {

    /**
     * @param $index
     * @return AssetSource|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, AssetSource::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return AssetSource|null
     */
    public function current()
    {
        return parent::current();
    }
}
