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
 * @extends McpServerUpdateActionCollection<McpServerAddToolAction>
 * @method McpServerAddToolAction current()
 * @method McpServerAddToolAction end()
 * @method McpServerAddToolAction at($offset)
 */
class McpServerAddToolActionCollection extends McpServerUpdateActionCollection
{
    /**
     * @psalm-assert McpServerAddToolAction $value
     * @psalm-param McpServerAddToolAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerAddToolActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerAddToolAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerAddToolAction
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerAddToolAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerAddToolAction $data */
                $data = McpServerAddToolActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
