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
 * @extends McpServerUpdateActionCollection<McpServerSetToolCustomizationsAction>
 * @method McpServerSetToolCustomizationsAction current()
 * @method McpServerSetToolCustomizationsAction end()
 * @method McpServerSetToolCustomizationsAction at($offset)
 */
class McpServerSetToolCustomizationsActionCollection extends McpServerUpdateActionCollection
{
    /**
     * @psalm-assert McpServerSetToolCustomizationsAction $value
     * @psalm-param McpServerSetToolCustomizationsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerSetToolCustomizationsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerSetToolCustomizationsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerSetToolCustomizationsAction
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerSetToolCustomizationsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerSetToolCustomizationsAction $data */
                $data = McpServerSetToolCustomizationsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
