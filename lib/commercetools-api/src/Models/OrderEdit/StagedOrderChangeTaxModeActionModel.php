<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\JsonObjectModel;

final class StagedOrderChangeTaxModeActionModel extends JsonObjectModel implements StagedOrderChangeTaxModeAction
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
        string $taxMode = null
    ) {
        $this->taxMode = $taxMode;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
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
            $data = $this->raw(StagedOrderChangeTaxModeAction::FIELD_TAX_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->taxMode = (string) $data;
        }

        return $this->taxMode;
    }

    public function setTaxMode(?string $taxMode): void
    {
        $this->taxMode = $taxMode;
    }
}
