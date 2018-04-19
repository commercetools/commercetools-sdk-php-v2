<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\TaxCategory\TaxCategoryUpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TaxCategorySetDescriptionActionCollectionModel extends TaxCategoryUpdateActionCollectionModel implements TaxCategorySetDescriptionActionCollection
{

    /**
     * @param TaxCategorySetDescriptionAction $value
     * @return TaxCategorySetDescriptionActionCollection
     */
    public function add($value) {
        if (!$value instanceof TaxCategorySetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TaxCategorySetDescriptionAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TaxCategorySetDescriptionAction) {
            $data = $this->mapData(TaxCategorySetDescriptionAction::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
