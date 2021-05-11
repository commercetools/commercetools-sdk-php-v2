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
 * @extends ErrorObjectCollection<DiscountCodeNonApplicableError>
 * @method DiscountCodeNonApplicableError current()
 * @method DiscountCodeNonApplicableError at($offset)
 */
class DiscountCodeNonApplicableErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert DiscountCodeNonApplicableError $value
     * @psalm-param DiscountCodeNonApplicableError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeNonApplicableErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeNonApplicableError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeNonApplicableError
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountCodeNonApplicableError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeNonApplicableError $data */
                $data = DiscountCodeNonApplicableErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
