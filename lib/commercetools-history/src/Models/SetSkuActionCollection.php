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
 * @extends MapperSequence<SetSkuAction>
 * @method SetSkuAction current()
 * @method SetSkuAction at($offset)
 */
class SetSkuActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetSkuAction $value
     * @psalm-param SetSkuAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetSkuActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetSkuAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetSkuAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetSkuAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetSkuActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
