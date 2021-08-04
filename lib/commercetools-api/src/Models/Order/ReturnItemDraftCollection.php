<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ReturnItemDraft>
 * @method ReturnItemDraft current()
 * @method ReturnItemDraft at($offset)
 */
class ReturnItemDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ReturnItemDraft $value
     * @psalm-param ReturnItemDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReturnItemDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReturnItemDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReturnItemDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ReturnItemDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReturnItemDraft $data */
                $data = ReturnItemDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
