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
 * @extends MapperSequence<DeliveryDraft>
 * @method DeliveryDraft current()
 * @method DeliveryDraft end()
 * @method DeliveryDraft at($offset)
 */
class DeliveryDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert DeliveryDraft $value
     * @psalm-param DeliveryDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryDraft $data */
                $data = DeliveryDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
