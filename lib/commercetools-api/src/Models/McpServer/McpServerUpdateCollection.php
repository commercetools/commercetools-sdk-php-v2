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
 * @extends MapperSequence<McpServerUpdate>
 * @method McpServerUpdate current()
 * @method McpServerUpdate end()
 * @method McpServerUpdate at($offset)
 */
class McpServerUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert McpServerUpdate $value
     * @psalm-param McpServerUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerUpdate $data */
                $data = McpServerUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
