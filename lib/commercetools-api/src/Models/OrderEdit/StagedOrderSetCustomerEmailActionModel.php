<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\JsonObjectModel;

final class StagedOrderSetCustomerEmailActionModel extends JsonObjectModel implements StagedOrderSetCustomerEmailAction
{
    const DISCRIMINATOR_VALUE = 'setCustomerEmail';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $email;

    public function __construct(
        string $email = null
    ) {
        $this->email = $email;
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
    public function getEmail()
    {
        if (is_null($this->email)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderSetCustomerEmailAction::FIELD_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->email = (string) $data;
        }

        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
}
