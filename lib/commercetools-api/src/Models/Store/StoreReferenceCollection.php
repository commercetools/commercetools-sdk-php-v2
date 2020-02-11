<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StoreReference>
 * @method StoreReference current()
 * @method StoreReference at($offset)
 */
class StoreReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert StoreReference $value
     * @psalm-param StoreReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreReference
     */
    protected function mapper()
    {
        return function (int $index): ?StoreReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StoreReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
