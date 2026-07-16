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
 * @extends McpServerUpdateActionCollection<McpServerSetJsonOutputFilteringAction>
 * @method McpServerSetJsonOutputFilteringAction current()
 * @method McpServerSetJsonOutputFilteringAction end()
 * @method McpServerSetJsonOutputFilteringAction at($offset)
 */
class McpServerSetJsonOutputFilteringActionCollection extends McpServerUpdateActionCollection
{
    /**
     * @psalm-assert McpServerSetJsonOutputFilteringAction $value
     * @psalm-param McpServerSetJsonOutputFilteringAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerSetJsonOutputFilteringActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerSetJsonOutputFilteringAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerSetJsonOutputFilteringAction
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerSetJsonOutputFilteringAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerSetJsonOutputFilteringAction $data */
                $data = McpServerSetJsonOutputFilteringActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
