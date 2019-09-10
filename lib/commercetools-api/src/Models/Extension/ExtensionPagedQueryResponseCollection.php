<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ExtensionPagedQueryResponse>
 *
 * @method ExtensionPagedQueryResponse current()
 * @method ExtensionPagedQueryResponse at($offset)
 */
class ExtensionPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ExtensionPagedQueryResponse $value
     * @psalm-param ExtensionPagedQueryResponse|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ExtensionPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ExtensionPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ExtensionPagedQueryResponse
     */
    protected function mapper()
    {
        return function (int $index): ?ExtensionPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ExtensionPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
