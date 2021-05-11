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
 * @extends MapperSequence<MissingAttributesPagedQueryResult>
 * @method MissingAttributesPagedQueryResult current()
 * @method MissingAttributesPagedQueryResult at($offset)
 */
class MissingAttributesPagedQueryResultCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingAttributesPagedQueryResult $value
     * @psalm-param MissingAttributesPagedQueryResult|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingAttributesPagedQueryResultCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingAttributesPagedQueryResult) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingAttributesPagedQueryResult
     */
    protected function mapper()
    {
        return function (int $index): ?MissingAttributesPagedQueryResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MissingAttributesPagedQueryResult $data */
                $data = MissingAttributesPagedQueryResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
