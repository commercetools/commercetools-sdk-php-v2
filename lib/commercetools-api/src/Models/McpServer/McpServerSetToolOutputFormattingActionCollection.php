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
 * @extends McpServerUpdateActionCollection<McpServerSetToolOutputFormattingAction>
 * @method McpServerSetToolOutputFormattingAction current()
 * @method McpServerSetToolOutputFormattingAction end()
 * @method McpServerSetToolOutputFormattingAction at($offset)
 */
class McpServerSetToolOutputFormattingActionCollection extends McpServerUpdateActionCollection
{
    /**
     * @psalm-assert McpServerSetToolOutputFormattingAction $value
     * @psalm-param McpServerSetToolOutputFormattingAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerSetToolOutputFormattingActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerSetToolOutputFormattingAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerSetToolOutputFormattingAction
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerSetToolOutputFormattingAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerSetToolOutputFormattingAction $data */
                $data = McpServerSetToolOutputFormattingActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
