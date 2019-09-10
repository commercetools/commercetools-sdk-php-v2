<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObjectModel;

final class PaymentSetStatusInterfaceCodeActionModel extends JsonObjectModel implements PaymentSetStatusInterfaceCodeAction
{
    const DISCRIMINATOR_VALUE = 'setStatusInterfaceCode';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $interfaceCode;

    public function __construct(
        string $action = null,
        string $interfaceCode = null
    ) {
        $this->action = $action;
        $this->interfaceCode = $interfaceCode;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentUpdateAction::FIELD_ACTION);
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
    public function getInterfaceCode()
    {
        if (is_null($this->interfaceCode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentSetStatusInterfaceCodeAction::FIELD_INTERFACE_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->interfaceCode = (string) $data;
        }

        return $this->interfaceCode;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setInterfaceCode(?string $interfaceCode): void
    {
        $this->interfaceCode = $interfaceCode;
    }
}
