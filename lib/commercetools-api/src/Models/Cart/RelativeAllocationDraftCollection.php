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
 * @extends AllocationDraftCollection<RelativeAllocationDraft>
 * @method RelativeAllocationDraft current()
 * @method RelativeAllocationDraft end()
 * @method RelativeAllocationDraft at($offset)
 */
class RelativeAllocationDraftCollection extends AllocationDraftCollection
{
    /**
     * @psalm-assert RelativeAllocationDraft $value
     * @psalm-param RelativeAllocationDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RelativeAllocationDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof RelativeAllocationDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RelativeAllocationDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?RelativeAllocationDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RelativeAllocationDraft $data */
                $data = RelativeAllocationDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
