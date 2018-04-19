<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\TaxCategory\TaxCategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TaxCategorySetKeyActionCollectionModel extends TaxCategoryUpdateActionCollectionModel implements TaxCategorySetKeyActionCollection
{

    /**
     * @param TaxCategorySetKeyAction $value
     * @return TaxCategorySetKeyActionCollection
     */
    public function add($value) {
        if (!$value instanceof TaxCategorySetKeyAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TaxCategorySetKeyAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TaxCategorySetKeyAction) {
            $data = $this->mapData(TaxCategorySetKeyAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
