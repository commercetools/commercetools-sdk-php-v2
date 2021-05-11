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
 * @extends TaxCategoryUpdateActionCollection<TaxCategoryAddTaxRateAction>
 * @method TaxCategoryAddTaxRateAction current()
 * @method TaxCategoryAddTaxRateAction at($offset)
 */
class TaxCategoryAddTaxRateActionCollection extends TaxCategoryUpdateActionCollection
{
    /**
     * @psalm-assert TaxCategoryAddTaxRateAction $value
     * @psalm-param TaxCategoryAddTaxRateAction|stdClass $value
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
                /** @var TaxCategoryAddTaxRateAction $data */
                $data = TaxCategoryAddTaxRateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
