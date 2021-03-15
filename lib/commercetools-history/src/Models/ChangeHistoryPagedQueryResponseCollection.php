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
 * @extends MapperSequence<ChangeHistoryPagedQueryResponse>
 * @method ChangeHistoryPagedQueryResponse current()
 * @method ChangeHistoryPagedQueryResponse at($offset)
 */
class ChangeHistoryPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeHistoryPagedQueryResponse $value
     * @psalm-param ChangeHistoryPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeHistoryPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeHistoryPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeHistoryPagedQueryResponse
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeHistoryPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeHistoryPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
