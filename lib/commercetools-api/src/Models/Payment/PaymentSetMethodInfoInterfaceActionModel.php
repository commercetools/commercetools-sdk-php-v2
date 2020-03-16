<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentSetMethodInfoInterfaceActionModel extends JsonObjectModel implements PaymentSetMethodInfoInterfaceAction
{
    public const DISCRIMINATOR_VALUE = 'setMethodInfoInterface';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $interface;


    public function __construct(
        string $interface = null
    ) {
        $this->interface = $interface;
        $this->action = static::DISCRIMINATOR_VALUE;
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
    public function getInterface()
    {
        if (is_null($this->interface)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentSetMethodInfoInterfaceAction::FIELD_INTERFACE);
            if (is_null($data)) {
                return null;
            }
            $this->interface = (string) $data;
        }

        return $this->interface;
    }

    public function setInterface(?string $interface): void
    {
        $this->interface = $interface;
    }
}
