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
 * @extends MapperSequence<ParcelDraft>
 * @method ParcelDraft current()
 * @method ParcelDraft end()
 * @method ParcelDraft at($offset)
 */
class ParcelDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ParcelDraft $value
     * @psalm-param ParcelDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ParcelDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ParcelDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParcelDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ParcelDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ParcelDraft $data */
                $data = ParcelDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
