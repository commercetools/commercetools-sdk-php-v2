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
 * @extends MapperSequence<MissingPricesPagedQueryResult>
 * @method MissingPricesPagedQueryResult current()
 * @method MissingPricesPagedQueryResult at($offset)
 */
class MissingPricesPagedQueryResultCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingPricesPagedQueryResult $value
     * @psalm-param MissingPricesPagedQueryResult|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingPricesPagedQueryResultCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingPricesPagedQueryResult) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingPricesPagedQueryResult
     */
    protected function mapper()
    {
        return function (int $index): ?MissingPricesPagedQueryResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MissingPricesPagedQueryResult $data */
                $data = MissingPricesPagedQueryResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
