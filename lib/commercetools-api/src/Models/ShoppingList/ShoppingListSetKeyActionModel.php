<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObjectModel;

final class ShoppingListSetKeyActionModel extends JsonObjectModel implements ShoppingListSetKeyAction
{
    const DISCRIMINATOR_VALUE = 'setKey';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $key;

    public function __construct(
        string $action = null,
        string $key = null
    ) {
        $this->action = $action;
        $this->key = $key;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShoppingListUpdateAction::FIELD_ACTION);
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
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShoppingListSetKeyAction::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}
