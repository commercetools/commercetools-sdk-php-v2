<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StoreCountry;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StoreCountry>
 * @method StoreCountry current()
 * @method StoreCountry end()
 * @method StoreCountry at($offset)
 */
class StoreCountryCollection extends MapperSequence
{
    /**
     * @psalm-assert StoreCountry $value
     * @psalm-param StoreCountry|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreCountryCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreCountry) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreCountry
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreCountry {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreCountry $data */
                $data = StoreCountryModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
