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
 * @extends MapperSequence<ChangeLabelChange>
 * @method ChangeLabelChange current()
 * @method ChangeLabelChange at($offset)
 */
class ChangeLabelChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeLabelChange $value
     * @psalm-param ChangeLabelChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeLabelChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeLabelChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeLabelChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeLabelChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeLabelChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
