<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<McpServer>
 * @method McpServer current()
 * @method McpServer end()
 * @method McpServer at($offset)
 */
class McpServerCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert McpServer $value
     * @psalm-param McpServer|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServer) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServer
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServer {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServer $data */
                $data = McpServerModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
