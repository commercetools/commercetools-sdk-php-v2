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
 * @extends TaxCategoryUpdateActionCollection<TaxCategoryChangeNameAction>
 * @method TaxCategoryChangeNameAction current()
 * @method TaxCategoryChangeNameAction at($offset)
 */
class TaxCategoryChangeNameActionCollection extends TaxCategoryUpdateActionCollection
{
    /**
     * @psalm-assert TaxCategoryChangeNameAction $value
     * @psalm-param TaxCategoryChangeNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaxCategoryChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxCategoryChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxCategoryChangeNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?TaxCategoryChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TaxCategoryChangeNameAction $data */
                $data = TaxCategoryChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
