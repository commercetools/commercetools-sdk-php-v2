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
 * @extends MapperSequence<SetProductVariantKeyAction>
 * @method SetProductVariantKeyAction current()
 * @method SetProductVariantKeyAction at($offset)
 */
class SetProductVariantKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetProductVariantKeyAction $value
     * @psalm-param SetProductVariantKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetProductVariantKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetProductVariantKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetProductVariantKeyAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetProductVariantKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetProductVariantKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
