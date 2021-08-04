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
 * @extends MapperSequence<RemoveParcelFromDeliveryDraft>
 * @method RemoveParcelFromDeliveryDraft current()
 * @method RemoveParcelFromDeliveryDraft end()
 * @method RemoveParcelFromDeliveryDraft at($offset)
 */
class RemoveParcelFromDeliveryDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveParcelFromDeliveryDraft $value
     * @psalm-param RemoveParcelFromDeliveryDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveParcelFromDeliveryDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveParcelFromDeliveryDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveParcelFromDeliveryDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?RemoveParcelFromDeliveryDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveParcelFromDeliveryDraft $data */
                $data = RemoveParcelFromDeliveryDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
