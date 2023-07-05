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
 * @extends ErrorObjectCollection<MaxCartDiscountsReachedError>
 * @method MaxCartDiscountsReachedError current()
 * @method MaxCartDiscountsReachedError end()
 * @method MaxCartDiscountsReachedError at($offset)
 */
class MaxCartDiscountsReachedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert MaxCartDiscountsReachedError $value
     * @psalm-param MaxCartDiscountsReachedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MaxCartDiscountsReachedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof MaxCartDiscountsReachedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MaxCartDiscountsReachedError
     */
    protected function mapper()
    {
        return function (?int $index): ?MaxCartDiscountsReachedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MaxCartDiscountsReachedError $data */
                $data = MaxCartDiscountsReachedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
