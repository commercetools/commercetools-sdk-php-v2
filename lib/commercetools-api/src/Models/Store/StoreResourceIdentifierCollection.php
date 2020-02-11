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
 * @extends MapperSequence<StoreResourceIdentifier>
 * @method StoreResourceIdentifier current()
 * @method StoreResourceIdentifier at($offset)
 */
class StoreResourceIdentifierCollection extends MapperSequence
{
    /**
     * @psalm-assert StoreResourceIdentifier $value
     * @psalm-param StoreResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreResourceIdentifier
     */
    protected function mapper()
    {
        return function (int $index): ?StoreResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StoreResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
