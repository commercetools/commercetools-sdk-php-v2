<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class SearchKeywordCollection extends Collection {

    /**
     * @param $index
     * @return SearchKeyword|null
     */
    public function at($index)
    {
        if (!isset($this->data[$index])) {
            $data = $this->raw($index);
            if (!is_null($data)) {
                $data = Mapper::map($data, SearchKeyword::class);
            }
            $this->data[$index] = $data;
        }
        return $this->data[$index];
    }
    
    /**
     * @return SearchKeyword|null
     */
    public function current()
    {
        return parent::current();
    }
}
