<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StandalonePricePagedQueryResponse>
 * @method StandalonePricePagedQueryResponse current()
 * @method StandalonePricePagedQueryResponse end()
 * @method StandalonePricePagedQueryResponse at($offset)
 */
class StandalonePricePagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert StandalonePricePagedQueryResponse $value
     * @psalm-param StandalonePricePagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePricePagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePricePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePricePagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePricePagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePricePagedQueryResponse $data */
                $data = StandalonePricePagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
