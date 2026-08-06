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
 * @extends McpServerUpdateActionCollection<McpServerSetAuthenticationModeAction>
 * @method McpServerSetAuthenticationModeAction current()
 * @method McpServerSetAuthenticationModeAction end()
 * @method McpServerSetAuthenticationModeAction at($offset)
 */
class McpServerSetAuthenticationModeActionCollection extends McpServerUpdateActionCollection
{
    /**
     * @psalm-assert McpServerSetAuthenticationModeAction $value
     * @psalm-param McpServerSetAuthenticationModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerSetAuthenticationModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerSetAuthenticationModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?McpServerSetAuthenticationModeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerSetAuthenticationModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var McpServerSetAuthenticationModeAction $data */
                $data = McpServerSetAuthenticationModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
