<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<RecordPagedQueryResponse>
 * @method RecordPagedQueryResponse current()
 * @method RecordPagedQueryResponse at($offset)
 */
class RecordPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert RecordPagedQueryResponse $value
     * @psalm-param RecordPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RecordPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof RecordPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RecordPagedQueryResponse
     */
    protected function mapper()
    {
        return function (int $index): ?RecordPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RecordPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
