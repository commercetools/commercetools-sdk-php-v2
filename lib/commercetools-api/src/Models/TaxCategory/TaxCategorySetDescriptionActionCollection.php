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
 * @extends MapperSequence<TaxCategorySetDescriptionAction>
 *
 * @method TaxCategorySetDescriptionAction current()
 * @method TaxCategorySetDescriptionAction at($offset)
 */
class TaxCategorySetDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxCategorySetDescriptionAction $value
     * @psalm-param TaxCategorySetDescriptionAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return TaxCategorySetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxCategorySetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxCategorySetDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?TaxCategorySetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TaxCategorySetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
