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
 * @extends MapperSequence<Action>
 * @method Action current()
 * @method Action at($offset)
 */
class ActionCollection extends MapperSequence
{
    /**
     * @psalm-assert Action $value
     * @psalm-param Action|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof Action) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Action
     */
    protected function mapper()
    {
        return function (int $index): ?Action {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
