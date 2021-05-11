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
 * @extends ErrorObjectCollection<NoMatchingProductDiscountFoundError>
 * @method NoMatchingProductDiscountFoundError current()
 * @method NoMatchingProductDiscountFoundError at($offset)
 */
class NoMatchingProductDiscountFoundErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert NoMatchingProductDiscountFoundError $value
     * @psalm-param NoMatchingProductDiscountFoundError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return NoMatchingProductDiscountFoundErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof NoMatchingProductDiscountFoundError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?NoMatchingProductDiscountFoundError
     */
    protected function mapper()
    {
        return function (int $index): ?NoMatchingProductDiscountFoundError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var NoMatchingProductDiscountFoundError $data */
                $data = NoMatchingProductDiscountFoundErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
