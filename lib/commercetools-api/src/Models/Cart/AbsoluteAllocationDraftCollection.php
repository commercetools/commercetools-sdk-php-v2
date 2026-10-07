<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Cart\AllocationDraftCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends AllocationDraftCollection<AbsoluteAllocationDraft>
 * @method AbsoluteAllocationDraft current()
 * @method AbsoluteAllocationDraft end()
 * @method AbsoluteAllocationDraft at($offset)
 */
class AbsoluteAllocationDraftCollection extends AllocationDraftCollection
{
    /**
     * @psalm-assert AbsoluteAllocationDraft $value
     * @psalm-param AbsoluteAllocationDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AbsoluteAllocationDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof AbsoluteAllocationDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AbsoluteAllocationDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?AbsoluteAllocationDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AbsoluteAllocationDraft $data */
                $data = AbsoluteAllocationDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
