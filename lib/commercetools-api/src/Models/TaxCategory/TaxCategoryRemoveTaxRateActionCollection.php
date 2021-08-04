<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Api\Models\TaxCategory\TaxCategoryUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends TaxCategoryUpdateActionCollection<TaxCategoryRemoveTaxRateAction>
 * @method TaxCategoryRemoveTaxRateAction current()
 * @method TaxCategoryRemoveTaxRateAction at($offset)
 */
class TaxCategoryRemoveTaxRateActionCollection extends TaxCategoryUpdateActionCollection
{
    /**
     * @psalm-assert TaxCategoryRemoveTaxRateAction $value
     * @psalm-param TaxCategoryRemoveTaxRateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaxCategoryRemoveTaxRateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxCategoryRemoveTaxRateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxCategoryRemoveTaxRateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?TaxCategoryRemoveTaxRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TaxCategoryRemoveTaxRateAction $data */
                $data = TaxCategoryRemoveTaxRateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
