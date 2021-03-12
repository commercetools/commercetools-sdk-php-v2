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
 * @extends MapperSequence<AddExternalImageAction>
 * @method AddExternalImageAction current()
 * @method AddExternalImageAction at($offset)
 */
class AddExternalImageActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddExternalImageAction $value
     * @psalm-param AddExternalImageAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddExternalImageActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddExternalImageAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddExternalImageAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddExternalImageAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddExternalImageActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
