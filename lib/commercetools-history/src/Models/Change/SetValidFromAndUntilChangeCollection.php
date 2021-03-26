<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetValidFromAndUntilChange>
 * @method SetValidFromAndUntilChange current()
 * @method SetValidFromAndUntilChange at($offset)
 */
class SetValidFromAndUntilChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetValidFromAndUntilChange $value
     * @psalm-param SetValidFromAndUntilChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetValidFromAndUntilChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetValidFromAndUntilChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetValidFromAndUntilChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetValidFromAndUntilChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetValidFromAndUntilChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
