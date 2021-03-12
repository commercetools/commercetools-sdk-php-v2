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
 * @extends MapperSequence<SetProductPriceCustomFieldAction>
 * @method SetProductPriceCustomFieldAction current()
 * @method SetProductPriceCustomFieldAction at($offset)
 */
class SetProductPriceCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetProductPriceCustomFieldAction $value
     * @psalm-param SetProductPriceCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetProductPriceCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetProductPriceCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetProductPriceCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetProductPriceCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetProductPriceCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
