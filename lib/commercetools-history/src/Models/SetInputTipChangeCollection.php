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
 * @extends MapperSequence<SetInputTipChange>
 * @method SetInputTipChange current()
 * @method SetInputTipChange at($offset)
 */
class SetInputTipChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetInputTipChange $value
     * @psalm-param SetInputTipChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetInputTipChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetInputTipChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetInputTipChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetInputTipChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetInputTipChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
