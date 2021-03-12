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
 * @extends MapperSequence<SetTitleAction>
 * @method SetTitleAction current()
 * @method SetTitleAction at($offset)
 */
class SetTitleActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetTitleAction $value
     * @psalm-param SetTitleAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTitleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTitleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTitleAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetTitleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetTitleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
