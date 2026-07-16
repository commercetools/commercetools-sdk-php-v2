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
 * @extends McpServerUpdateActionCollection<McpServerRemoveToolCustomizationAction>
 * @method McpServerRemoveToolCustomizationAction current()
 * @method McpServerRemoveToolCustomizationAction end()
 * @method McpServerRemoveToolCustomizationAction at($offset)
 */
class McpServerRemoveToolCustomizationActionCollection extends McpServerUpdateActionCollection
{
    /**
     * @psalm-assert McpServerRemoveToolCustomizationAction $value
     * @psalm-param McpServerRemoveToolCustomizationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerRemoveToolCustomizationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerRemoveToolCustomizationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerRemoveToolCustomizationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerRemoveToolCustomizationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerRemoveToolCustomizationAction $data */
                $data = McpServerRemoveToolCustomizationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
