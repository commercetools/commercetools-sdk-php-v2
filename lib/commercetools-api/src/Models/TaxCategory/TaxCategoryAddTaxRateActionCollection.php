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
 * @extends MapperSequence<TaxCategoryAddTaxRateAction>
 *
 * @method TaxCategoryAddTaxRateAction current()
 * @method TaxCategoryAddTaxRateAction at($offset)
 */
class TaxCategoryAddTaxRateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxCategoryAddTaxRateAction $value
     * @psalm-param TaxCategoryAddTaxRateAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return TaxCategoryAddTaxRateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxCategoryAddTaxRateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxCategoryAddTaxRateAction
     */
    protected function mapper()
    {
        return function (int $index): ?TaxCategoryAddTaxRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TaxCategoryAddTaxRateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
