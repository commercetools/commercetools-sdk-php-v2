<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Api\Models\McpServer\McpServerUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends McpServerUpdateActionCollection<McpServerRemoveToolAction>
 * @method McpServerRemoveToolAction current()
 * @method McpServerRemoveToolAction end()
 * @method McpServerRemoveToolAction at($offset)
 */
class McpServerRemoveToolActionCollection extends McpServerUpdateActionCollection
{
    /**
     * @psalm-assert McpServerRemoveToolAction $value
     * @psalm-param McpServerRemoveToolAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerRemoveToolActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerRemoveToolAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerRemoveToolAction
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerRemoveToolAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerRemoveToolAction $data */
                $data = McpServerRemoveToolActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
