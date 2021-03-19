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
 * @extends MapperSequence<SetTitleChange>
 * @method SetTitleChange current()
 * @method SetTitleChange at($offset)
 */
class SetTitleChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetTitleChange $value
     * @psalm-param SetTitleChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTitleChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTitleChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTitleChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetTitleChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetTitleChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
