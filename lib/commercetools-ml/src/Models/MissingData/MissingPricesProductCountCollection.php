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
 * @template T of MissingPricesProductCount
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method MissingPricesProductCount current()
 * @method MissingPricesProductCount end()
 * @method MissingPricesProductCount at($offset)
 */
class MissingPricesProductCountCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
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
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?MissingPricesProductCount {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = MissingPricesProductCountModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
