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
 * @extends McpServerUpdateActionCollection<McpServerSetNameAction>
 * @method McpServerSetNameAction current()
 * @method McpServerSetNameAction end()
 * @method McpServerSetNameAction at($offset)
 */
class McpServerSetNameActionCollection extends McpServerUpdateActionCollection
{
    /**
     * @psalm-assert McpServerSetNameAction $value
     * @psalm-param McpServerSetNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerSetNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerSetNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerSetNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerSetNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerSetNameAction $data */
                $data = McpServerSetNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
