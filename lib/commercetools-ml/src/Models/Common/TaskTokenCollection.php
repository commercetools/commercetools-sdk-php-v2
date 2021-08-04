<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TaskToken>
 * @method TaskToken current()
 * @method TaskToken end()
 * @method TaskToken at($offset)
 */
class TaskTokenCollection extends MapperSequence
{
    /**
     * @psalm-assert TaskToken $value
     * @psalm-param TaskToken|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaskTokenCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaskToken) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaskToken
     */
    protected function mapper()
    {
        return function (?int $index): ?TaskToken {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TaskToken $data */
                $data = TaskTokenModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
