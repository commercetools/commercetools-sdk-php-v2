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
 * @extends MapperSequence<VerifyEmailAction>
 * @method VerifyEmailAction current()
 * @method VerifyEmailAction at($offset)
 */
class VerifyEmailActionCollection extends MapperSequence
{
    /**
     * @psalm-assert VerifyEmailAction $value
     * @psalm-param VerifyEmailAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VerifyEmailActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VerifyEmailAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VerifyEmailAction
     */
    protected function mapper()
    {
        return function (int $index): ?VerifyEmailAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = VerifyEmailActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
