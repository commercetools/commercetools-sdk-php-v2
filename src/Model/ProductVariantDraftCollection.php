<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductVariantDraftCollection extends Collection {

    /**
     * @param $index
     * @return ProductVariantDraft|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, ProductVariantDraft::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return ProductVariantDraft|null
     */
    public function current()
    {
        return parent::current();
    }
}
