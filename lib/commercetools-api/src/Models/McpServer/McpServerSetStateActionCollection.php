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
 * @extends McpServerUpdateActionCollection<McpServerSetStateAction>
 * @method McpServerSetStateAction current()
 * @method McpServerSetStateAction end()
 * @method McpServerSetStateAction at($offset)
 */
class McpServerSetStateActionCollection extends McpServerUpdateActionCollection
{
    /**
     * @psalm-assert McpServerSetStateAction $value
     * @psalm-param McpServerSetStateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerSetStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerSetStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerSetStateAction
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerSetStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerSetStateAction $data */
                $data = McpServerSetStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
