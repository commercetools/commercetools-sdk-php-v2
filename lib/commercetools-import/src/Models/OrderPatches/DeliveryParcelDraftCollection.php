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
 * @extends MapperSequence<DeliveryParcelDraft>
 * @method DeliveryParcelDraft current()
 * @method DeliveryParcelDraft end()
 * @method DeliveryParcelDraft at($offset)
 */
class DeliveryParcelDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert DeliveryParcelDraft $value
     * @psalm-param DeliveryParcelDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryParcelDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryParcelDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryParcelDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?DeliveryParcelDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryParcelDraft $data */
                $data = DeliveryParcelDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
