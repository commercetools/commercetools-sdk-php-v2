<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class AssetDraftCollection extends Collection {

    /**
     * @param $index
     * @return AssetDraft|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, AssetDraft::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return AssetDraft|null
     */
    public function current()
    {
        return parent::current();
    }
}
