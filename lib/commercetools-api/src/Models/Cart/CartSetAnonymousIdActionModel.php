<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObjectModel;

final class CartSetAnonymousIdActionModel extends JsonObjectModel implements CartSetAnonymousIdAction
{
    const DISCRIMINATOR_VALUE = 'setAnonymousId';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $anonymousId;

    public function __construct(
        string $action = null,
        string $anonymousId = null
    ) {
        $this->action = $action;
        $this->anonymousId = $anonymousId;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartSetAnonymousIdAction::FIELD_ANONYMOUS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousId = (string) $data;
        }

        return $this->anonymousId;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }
}
