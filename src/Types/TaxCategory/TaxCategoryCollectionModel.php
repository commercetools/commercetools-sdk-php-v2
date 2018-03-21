<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Base\JsonCollection;

class TaxCategoryCollectionModel extends JsonCollection implements TaxCategoryCollection {

    /**
     * @param TaxCategory $value
     * @return TaxCategoryCollection
     */
    public function add($value) {
        if (!$value instanceof TaxCategory) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TaxCategory
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TaxCategory) {
            $data = $this->mapData(TaxCategory::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }

    protected function index($data)
    {
        foreach ($data as $key => $value) {
            if (isset($value['id'])) {
                $this->addToIndex('id', $value['id'], $key);
            }
        }
    }

    /**
     * @return string
     */
    public function byId($id)
    {
        return $this->valueByKey('id', $id);
    }
}
