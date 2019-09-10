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
 * @extends MapperSequence<TaxCategoryRemoveTaxRateAction>
 *
 * @method TaxCategoryRemoveTaxRateAction current()
 * @method TaxCategoryRemoveTaxRateAction at($offset)
 */
class TaxCategoryRemoveTaxRateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxCategoryRemoveTaxRateAction $value
     * @psalm-param TaxCategoryRemoveTaxRateAction|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?TaxCategoryRemoveTaxRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TaxCategoryRemoveTaxRateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
