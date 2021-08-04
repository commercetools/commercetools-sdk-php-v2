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
 * @extends MapperSequence<StoreUpdate>
 * @method StoreUpdate current()
 * @method StoreUpdate end()
 * @method StoreUpdate at($offset)
 */
class StoreUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert StoreUpdate $value
     * @psalm-param StoreUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreUpdate $data */
                $data = StoreUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
