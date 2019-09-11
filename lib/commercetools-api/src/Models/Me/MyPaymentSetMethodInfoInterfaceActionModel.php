<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObjectModel;

final class MyPaymentSetMethodInfoInterfaceActionModel extends JsonObjectModel implements MyPaymentSetMethodInfoInterfaceAction
{
    const DISCRIMINATOR_VALUE = 'setMethodInfoInterface';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $interface;

    public function __construct(
        string $action = null,
        string $interface = null
    ) {
        $this->action = $action;
        $this->interface = $interface;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyPaymentUpdateAction::FIELD_ACTION);
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
    public function getInterface()
    {
        if (is_null($this->interface)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyPaymentSetMethodInfoInterfaceAction::FIELD_INTERFACE);
            if (is_null($data)) {
                return null;
            }
            $this->interface = (string) $data;
        }

        return $this->interface;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setInterface(?string $interface): void
    {
        $this->interface = $interface;
    }
}
