<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObjectModel;

final class ProductSetKeyActionModel extends JsonObjectModel implements ProductSetKeyAction
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
        string $key = null
    ) {
        $this->key = $key;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>User-specific unique identifier for the product.
     * If left blank or set to <code>null</code>, the product key is unset/removed.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductSetKeyAction::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}
