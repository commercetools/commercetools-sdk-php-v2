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
 * @extends MapperSequence<DiscountCodeDraft>
 * @method DiscountCodeDraft current()
 * @method DiscountCodeDraft at($offset)
 */
class DiscountCodeDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountCodeDraft $value
     * @psalm-param DiscountCodeDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeDraft
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountCodeDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DiscountCodeDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
