<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObjectModel;

final class CartChangeTaxModeActionModel extends JsonObjectModel implements CartChangeTaxModeAction
{
    const DISCRIMINATOR_VALUE = 'changeTaxMode';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $taxMode;

    public function __construct(
        string $action = null,
        string $taxMode = null
    ) {
        $this->action = $action;
        $this->taxMode = $taxMode;
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
    public function getTaxMode()
    {
        if (is_null($this->taxMode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartChangeTaxModeAction::FIELD_TAX_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->taxMode = (string) $data;
        }

        return $this->taxMode;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setTaxMode(?string $taxMode): void
    {
        $this->taxMode = $taxMode;
    }
}
