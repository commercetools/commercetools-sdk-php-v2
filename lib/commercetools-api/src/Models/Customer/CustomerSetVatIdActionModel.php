<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObjectModel;

final class CustomerSetVatIdActionModel extends JsonObjectModel implements CustomerSetVatIdAction
{
    const DISCRIMINATOR_VALUE = 'setVatId';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $vatId;

    public function __construct(
        string $vatId = null
    ) {
        $this->vatId = $vatId;
        $this->action = static::DISCRIMINATOR_VALUE;
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
    public function getVatId()
    {
        if (is_null($this->vatId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerSetVatIdAction::FIELD_VAT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->vatId = (string) $data;
        }

        return $this->vatId;
    }

    public function setVatId(?string $vatId): void
    {
        $this->vatId = $vatId;
    }
}
