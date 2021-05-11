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
 * @extends TaxCategoryUpdateActionCollection<TaxCategorySetKeyAction>
 * @method TaxCategorySetKeyAction current()
 * @method TaxCategorySetKeyAction at($offset)
 */
class TaxCategorySetKeyActionCollection extends TaxCategoryUpdateActionCollection
{
    /**
     * @psalm-assert TaxCategorySetKeyAction $value
     * @psalm-param TaxCategorySetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaxCategorySetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxCategorySetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxCategorySetKeyAction
     */
    protected function mapper()
    {
        return function (int $index): ?TaxCategorySetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TaxCategorySetKeyAction $data */
                $data = TaxCategorySetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
