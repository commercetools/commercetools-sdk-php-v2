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
 * @extends MapperSequence<SetProductPriceCustomTypeAction>
 * @method SetProductPriceCustomTypeAction current()
 * @method SetProductPriceCustomTypeAction at($offset)
 */
class SetProductPriceCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetProductPriceCustomTypeAction $value
     * @psalm-param SetProductPriceCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetProductPriceCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetProductPriceCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetProductPriceCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetProductPriceCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetProductPriceCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
