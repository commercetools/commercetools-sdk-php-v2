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
 * @extends MapperSequence<McpServerType>
 * @method McpServerType current()
 * @method McpServerType end()
 * @method McpServerType at($offset)
 */
class McpServerTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert McpServerType $value
     * @psalm-param McpServerType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerType
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerType $data */
                $data = McpServerTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
