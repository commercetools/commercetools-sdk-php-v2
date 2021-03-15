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
 * @extends MapperSequence<SetMetaTitleAction>
 * @method SetMetaTitleAction current()
 * @method SetMetaTitleAction at($offset)
 */
class SetMetaTitleActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetMetaTitleAction $value
     * @psalm-param SetMetaTitleAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMetaTitleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMetaTitleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMetaTitleAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetMetaTitleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetMetaTitleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
