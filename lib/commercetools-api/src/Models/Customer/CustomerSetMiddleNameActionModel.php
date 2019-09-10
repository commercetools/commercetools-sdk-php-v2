<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObjectModel;

final class CustomerSetMiddleNameActionModel extends JsonObjectModel implements CustomerSetMiddleNameAction
{
    const DISCRIMINATOR_VALUE = 'setMiddleName';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $middleName;

    public function __construct(
        string $action = null,
        string $middleName = null
    ) {
        $this->action = $action;
        $this->middleName = $middleName;
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
    public function getMiddleName()
    {
        if (is_null($this->middleName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerSetMiddleNameAction::FIELD_MIDDLE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->middleName = (string) $data;
        }

        return $this->middleName;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setMiddleName(?string $middleName): void
    {
        $this->middleName = $middleName;
    }
}
