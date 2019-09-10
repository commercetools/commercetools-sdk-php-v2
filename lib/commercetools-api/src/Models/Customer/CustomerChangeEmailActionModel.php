<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObjectModel;

final class CustomerChangeEmailActionModel extends JsonObjectModel implements CustomerChangeEmailAction
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
        string $action = null,
        string $email = null
    ) {
        $this->action = $action;
        $this->email = $email;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerUpdateAction::FIELD_ACTION);
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
            $data = $this->raw(CustomerChangeEmailAction::FIELD_EMAIL);
            if (is_null($data)) {
                return null;
            }
            $this->email = (string) $data;
        }

        return $this->email;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
}
