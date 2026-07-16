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
 * @extends McpServerUpdateActionCollection<McpServerSetToolsAction>
 * @method McpServerSetToolsAction current()
 * @method McpServerSetToolsAction end()
 * @method McpServerSetToolsAction at($offset)
 */
class McpServerSetToolsActionCollection extends McpServerUpdateActionCollection
{
    /**
     * @psalm-assert McpServerSetToolsAction $value
     * @psalm-param McpServerSetToolsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerSetToolsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerSetToolsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerSetToolsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerSetToolsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerSetToolsAction $data */
                $data = McpServerSetToolsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
