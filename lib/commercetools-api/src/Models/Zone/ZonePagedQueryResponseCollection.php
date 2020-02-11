<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ZonePagedQueryResponse>
 * @method ZonePagedQueryResponse current()
 * @method ZonePagedQueryResponse at($offset)
 */
class ZonePagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ZonePagedQueryResponse $value
     * @psalm-param ZonePagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ZonePagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ZonePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ZonePagedQueryResponse
     */
    protected function mapper()
    {
        return function (int $index): ?ZonePagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ZonePagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
