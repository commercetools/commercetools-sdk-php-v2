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
 * @extends MapperSequence<SetValidFromChange>
 * @method SetValidFromChange current()
 * @method SetValidFromChange at($offset)
 */
class SetValidFromChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetValidFromChange $value
     * @psalm-param SetValidFromChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetValidFromChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetValidFromChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetValidFromChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetValidFromChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetValidFromChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
