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
 * @extends MapperSequence<MissingPricesSearchRequest>
 * @method MissingPricesSearchRequest current()
 * @method MissingPricesSearchRequest end()
 * @method MissingPricesSearchRequest at($offset)
 */
class MissingPricesSearchRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingPricesSearchRequest $value
     * @psalm-param MissingPricesSearchRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingPricesSearchRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingPricesSearchRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingPricesSearchRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?MissingPricesSearchRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MissingPricesSearchRequest $data */
                $data = MissingPricesSearchRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
