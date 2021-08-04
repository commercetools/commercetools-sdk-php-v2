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
 * @extends MapperSequence<MissingAttributesSearchRequest>
 * @method MissingAttributesSearchRequest current()
 * @method MissingAttributesSearchRequest at($offset)
 */
class MissingAttributesSearchRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingAttributesSearchRequest $value
     * @psalm-param MissingAttributesSearchRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingAttributesSearchRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingAttributesSearchRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingAttributesSearchRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?MissingAttributesSearchRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MissingAttributesSearchRequest $data */
                $data = MissingAttributesSearchRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
