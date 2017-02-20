<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class InventoryDraftCollection extends Collection {

    /**
     * @param $index
     * @return InventoryDraft|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, InventoryDraft::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return InventoryDraft|null
     */
    public function current()
    {
        return parent::current();
    }
}
