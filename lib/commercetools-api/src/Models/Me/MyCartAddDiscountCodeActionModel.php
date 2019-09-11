<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObjectModel;

final class MyCartAddDiscountCodeActionModel extends JsonObjectModel implements MyCartAddDiscountCodeAction
{
    const DISCRIMINATOR_VALUE = 'addDiscountCode';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $code;

    public function __construct(
        string $action = null,
        string $code = null
    ) {
        $this->action = $action;
        $this->code = $code;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCartUpdateAction::FIELD_ACTION);
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
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCartAddDiscountCodeAction::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }
}
