<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Types\UpdateActionCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class TaxCategoryUpdateActionCollectionModel extends UpdateActionCollectionModel implements TaxCategoryUpdateActionCollection
{

    /**
     * @param TaxCategoryUpdateAction $value
     * @return TaxCategoryUpdateActionCollection
     */
    public function add($value) {
        if (!$value instanceof TaxCategoryUpdateAction) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TaxCategoryUpdateAction
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TaxCategoryUpdateAction) {
            $resolvedClass = $this->resolveDiscriminator(TaxCategoryUpdateAction::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
