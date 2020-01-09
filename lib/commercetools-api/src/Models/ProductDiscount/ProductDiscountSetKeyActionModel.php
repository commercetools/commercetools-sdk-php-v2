<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObjectModel;

final class ProductDiscountSetKeyActionModel extends JsonObjectModel implements ProductDiscountSetKeyAction
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
            $data = $this->raw(ProductDiscountUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>The key to set.
     * If you provide a <code>null</code> value or do not set this field at all, the existing <code>key</code> field is removed.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductDiscountSetKeyAction::FIELD_KEY);
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
