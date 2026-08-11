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
 * @extends McpServerUpdateActionCollection<McpServerAddToolCustomizationAction>
 * @method McpServerAddToolCustomizationAction current()
 * @method McpServerAddToolCustomizationAction end()
 * @method McpServerAddToolCustomizationAction at($offset)
 */
class McpServerAddToolCustomizationActionCollection extends McpServerUpdateActionCollection
{
    /**
     * @psalm-assert McpServerAddToolCustomizationAction $value
     * @psalm-param McpServerAddToolCustomizationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerAddToolCustomizationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerAddToolCustomizationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerAddToolCustomizationAction
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerAddToolCustomizationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerAddToolCustomizationAction $data */
                $data = McpServerAddToolCustomizationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
