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
 * @extends MapperSequence<ChangeSlugAction>
 * @method ChangeSlugAction current()
 * @method ChangeSlugAction at($offset)
 */
class ChangeSlugActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeSlugAction $value
     * @psalm-param ChangeSlugAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeSlugActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeSlugAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeSlugAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeSlugAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeSlugActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
