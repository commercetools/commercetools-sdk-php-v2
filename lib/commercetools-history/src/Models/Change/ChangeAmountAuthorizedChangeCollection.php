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
 * @extends MapperSequence<ChangeAmountAuthorizedChange>
 * @method ChangeAmountAuthorizedChange current()
 * @method ChangeAmountAuthorizedChange at($offset)
 */
class ChangeAmountAuthorizedChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeAmountAuthorizedChange $value
     * @psalm-param ChangeAmountAuthorizedChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeAmountAuthorizedChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeAmountAuthorizedChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeAmountAuthorizedChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeAmountAuthorizedChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeAmountAuthorizedChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
