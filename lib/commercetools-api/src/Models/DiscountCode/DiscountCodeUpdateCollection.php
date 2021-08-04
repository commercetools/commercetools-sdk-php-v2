<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountCodeUpdate>
 * @method DiscountCodeUpdate current()
 * @method DiscountCodeUpdate end()
 * @method DiscountCodeUpdate at($offset)
 */
class DiscountCodeUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountCodeUpdate $value
     * @psalm-param DiscountCodeUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountCodeUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeUpdate $data */
                $data = DiscountCodeUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
