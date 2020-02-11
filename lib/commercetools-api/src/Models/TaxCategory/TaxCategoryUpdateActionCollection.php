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
 * @extends MapperSequence<TaxCategoryUpdateAction>
 * @method TaxCategoryUpdateAction current()
 * @method TaxCategoryUpdateAction at($offset)
 */
class TaxCategoryUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxCategoryUpdateAction $value
     * @psalm-param TaxCategoryUpdateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaxCategoryUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxCategoryUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxCategoryUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?TaxCategoryUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TaxCategoryUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
