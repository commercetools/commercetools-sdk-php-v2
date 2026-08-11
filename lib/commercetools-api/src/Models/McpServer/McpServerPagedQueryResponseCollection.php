<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<McpServerPagedQueryResponse>
 * @method McpServerPagedQueryResponse current()
 * @method McpServerPagedQueryResponse end()
 * @method McpServerPagedQueryResponse at($offset)
 */
class McpServerPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert McpServerPagedQueryResponse $value
     * @psalm-param McpServerPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerPagedQueryResponse $data */
                $data = McpServerPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
