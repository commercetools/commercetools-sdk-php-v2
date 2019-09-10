<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountCodeNonApplicableError>
 *
 * @method DiscountCodeNonApplicableError current()
 * @method DiscountCodeNonApplicableError at($offset)
 */
class DiscountCodeNonApplicableErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountCodeNonApplicableError $value
     * @psalm-param DiscountCodeNonApplicableError|stdClass $value
     *
     * @param mixed $value
     *
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
                $data = DiscountCodeNonApplicableErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
