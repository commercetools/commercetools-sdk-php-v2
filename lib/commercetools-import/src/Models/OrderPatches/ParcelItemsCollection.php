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
 * @extends MapperSequence<ParcelItems>
 * @method ParcelItems current()
 * @method ParcelItems at($offset)
 */
class ParcelItemsCollection extends MapperSequence
{
    /**
     * @psalm-assert ParcelItems $value
     * @psalm-param ParcelItems|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ParcelItemsCollection
     */
    public function add($value)
    {
        if (!$value instanceof ParcelItems) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParcelItems
     */
    protected function mapper()
    {
        return function (int $index): ?ParcelItems {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ParcelItems $data */
                $data = ParcelItemsModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
