<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountGroup;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountGroupDraft>
 * @method DiscountGroupDraft current()
 * @method DiscountGroupDraft end()
 * @method DiscountGroupDraft at($offset)
 */
class DiscountGroupDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountGroupDraft $value
     * @psalm-param DiscountGroupDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountGroupDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountGroupDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountGroupDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountGroupDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountGroupDraft $data */
                $data = DiscountGroupDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
