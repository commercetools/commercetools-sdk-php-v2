<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MissingPricesProductCount>
 * @method MissingPricesProductCount current()
 * @method MissingPricesProductCount at($offset)
 */
class MissingPricesProductCountCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingPricesProductCount $value
     * @psalm-param MissingPricesProductCount|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingPricesProductCountCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingPricesProductCount) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingPricesProductCount
     */
    protected function mapper()
    {
        return function (int $index): ?MissingPricesProductCount {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MissingPricesProductCountModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
