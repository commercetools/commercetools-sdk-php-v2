<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class AssetCollection extends Collection {

    /**
     * @param $index
     * @return Asset|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = new Asset($data);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return Asset|null
     */
    public function current()
    {
        return parent::current();
    }
}
