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
 * @extends MapperSequence<McpServerTypeTool>
 * @method McpServerTypeTool current()
 * @method McpServerTypeTool end()
 * @method McpServerTypeTool at($offset)
 */
class McpServerTypeToolCollection extends MapperSequence
{
    /**
     * @psalm-assert McpServerTypeTool $value
     * @psalm-param McpServerTypeTool|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerTypeToolCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerTypeTool) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerTypeTool
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerTypeTool {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerTypeTool $data */
                $data = McpServerTypeToolModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
