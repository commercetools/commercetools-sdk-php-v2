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
 * @extends MapperSequence<StorePagedQueryResponse>
 * @method StorePagedQueryResponse current()
 * @method StorePagedQueryResponse end()
 * @method StorePagedQueryResponse at($offset)
 */
class StorePagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert StorePagedQueryResponse $value
     * @psalm-param StorePagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StorePagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof StorePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StorePagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?StorePagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StorePagedQueryResponse $data */
                $data = StorePagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
