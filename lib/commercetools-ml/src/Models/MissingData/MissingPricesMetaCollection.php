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
 * @extends MapperSequence<MissingPricesMeta>
 * @method MissingPricesMeta current()
 * @method MissingPricesMeta at($offset)
 */
class MissingPricesMetaCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingPricesMeta $value
     * @psalm-param MissingPricesMeta|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingPricesMetaCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingPricesMeta) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingPricesMeta
     */
    protected function mapper()
    {
        return function (int $index): ?MissingPricesMeta {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MissingPricesMetaModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
