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
 * @extends TaxCategoryUpdateActionCollection<TaxCategoryReplaceTaxRateAction>
 * @method TaxCategoryReplaceTaxRateAction current()
 * @method TaxCategoryReplaceTaxRateAction end()
 * @method TaxCategoryReplaceTaxRateAction at($offset)
 */
class TaxCategoryReplaceTaxRateActionCollection extends TaxCategoryUpdateActionCollection
{
    /**
     * @psalm-assert TaxCategoryReplaceTaxRateAction $value
     * @psalm-param TaxCategoryReplaceTaxRateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaxCategoryReplaceTaxRateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxCategoryReplaceTaxRateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxCategoryReplaceTaxRateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?TaxCategoryReplaceTaxRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TaxCategoryReplaceTaxRateAction $data */
                $data = TaxCategoryReplaceTaxRateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
