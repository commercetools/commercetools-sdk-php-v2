<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetTaxCategoryAction>
 * @method SetTaxCategoryAction current()
 * @method SetTaxCategoryAction at($offset)
 */
class SetTaxCategoryActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetTaxCategoryAction $value
     * @psalm-param SetTaxCategoryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTaxCategoryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTaxCategoryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTaxCategoryAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetTaxCategoryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetTaxCategoryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
