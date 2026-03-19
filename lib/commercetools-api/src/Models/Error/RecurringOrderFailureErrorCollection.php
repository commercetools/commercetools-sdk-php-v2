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
 * @extends ErrorObjectCollection<RecurringOrderFailureError>
 * @method RecurringOrderFailureError current()
 * @method RecurringOrderFailureError end()
 * @method RecurringOrderFailureError at($offset)
 */
class RecurringOrderFailureErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert RecurringOrderFailureError $value
     * @psalm-param RecurringOrderFailureError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecurringOrderFailureErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecurringOrderFailureError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecurringOrderFailureError
     */
    protected function mapper()
    {
        return function (?int $index): ?RecurringOrderFailureError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RecurringOrderFailureError $data */
                $data = RecurringOrderFailureErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
