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
 * @extends McpServerUpdateActionCollection<McpServerSetDescriptionAction>
 * @method McpServerSetDescriptionAction current()
 * @method McpServerSetDescriptionAction end()
 * @method McpServerSetDescriptionAction at($offset)
 */
class McpServerSetDescriptionActionCollection extends McpServerUpdateActionCollection
{
    /**
     * @psalm-assert McpServerSetDescriptionAction $value
     * @psalm-param McpServerSetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerSetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerSetDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerSetDescriptionAction $data */
                $data = McpServerSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
