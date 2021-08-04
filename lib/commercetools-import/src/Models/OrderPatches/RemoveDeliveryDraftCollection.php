<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RemoveDeliveryDraft>
 * @method RemoveDeliveryDraft current()
 * @method RemoveDeliveryDraft at($offset)
 */
class RemoveDeliveryDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveDeliveryDraft $value
     * @psalm-param RemoveDeliveryDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveDeliveryDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveDeliveryDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveDeliveryDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?RemoveDeliveryDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveDeliveryDraft $data */
                $data = RemoveDeliveryDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
