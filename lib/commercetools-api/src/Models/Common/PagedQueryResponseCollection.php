<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PagedQueryResponse>
 *
 * @method PagedQueryResponse current()
 * @method PagedQueryResponse at($offset)
 */
class PagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert PagedQueryResponse $value
     * @psalm-param PagedQueryResponse|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return PagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof PagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PagedQueryResponse
     */
    protected function mapper()
    {
        return function (int $index): ?PagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
