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
 * @extends ErrorObjectCollection<MaxDiscountGroupsReachedError>
 * @method MaxDiscountGroupsReachedError current()
 * @method MaxDiscountGroupsReachedError end()
 * @method MaxDiscountGroupsReachedError at($offset)
 */
class MaxDiscountGroupsReachedErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert MaxDiscountGroupsReachedError $value
     * @psalm-param MaxDiscountGroupsReachedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MaxDiscountGroupsReachedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof MaxDiscountGroupsReachedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MaxDiscountGroupsReachedError
     */
    protected function mapper()
    {
        return function (?int $index): ?MaxDiscountGroupsReachedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MaxDiscountGroupsReachedError $data */
                $data = MaxDiscountGroupsReachedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
