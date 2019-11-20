<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObjectModel;

final class MyCustomerChangeEmailActionModel extends JsonObjectModel implements MyCustomerChangeEmailAction
{
    const DISCRIMINATOR_VALUE = 'changeEmail';

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
            $data = $this->raw(MyCustomerUpdateAction::FIELD_ACTION);
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
            $data = $this->raw(MyCustomerChangeEmailAction::FIELD_EMAIL);
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
