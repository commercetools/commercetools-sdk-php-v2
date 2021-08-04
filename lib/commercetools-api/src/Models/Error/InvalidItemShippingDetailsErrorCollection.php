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
 * @extends ErrorObjectCollection<InvalidItemShippingDetailsError>
 * @method InvalidItemShippingDetailsError current()
 * @method InvalidItemShippingDetailsError at($offset)
 */
class InvalidItemShippingDetailsErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert InvalidItemShippingDetailsError $value
     * @psalm-param InvalidItemShippingDetailsError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InvalidItemShippingDetailsErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof InvalidItemShippingDetailsError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidItemShippingDetailsError
     */
    protected function mapper()
    {
        return function (?int $index): ?InvalidItemShippingDetailsError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InvalidItemShippingDetailsError $data */
                $data = InvalidItemShippingDetailsErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
