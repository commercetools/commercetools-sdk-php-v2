<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TaxCategoryReplaceTaxRateAction>
 *
 * @method TaxCategoryReplaceTaxRateAction current()
 * @method TaxCategoryReplaceTaxRateAction at($offset)
 */
class TaxCategoryReplaceTaxRateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxCategoryReplaceTaxRateAction $value
     * @psalm-param TaxCategoryReplaceTaxRateAction|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?TaxCategoryReplaceTaxRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TaxCategoryReplaceTaxRateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
