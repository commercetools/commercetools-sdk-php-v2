<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<MoneyOverflowError>
 * @method MoneyOverflowError current()
 * @method MoneyOverflowError end()
 * @method MoneyOverflowError at($offset)
 */
class MoneyOverflowErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert MoneyOverflowError $value
     * @psalm-param MoneyOverflowError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MoneyOverflowErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof MoneyOverflowError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MoneyOverflowError
     */
    protected function mapper()
    {
        return function (?int $index): ?MoneyOverflowError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MoneyOverflowError $data */
                $data = MoneyOverflowErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
