<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

final class MyPaymentSetMethodInfoMethodActionModel extends JsonObjectModel implements MyPaymentSetMethodInfoMethodAction
{
    public const DISCRIMINATOR_VALUE = 'setMethodInfoMethod';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $method;


    public function __construct(
        string $method = null
    ) {
        $this->method = $method;
        $this->action = static::DISCRIMINATOR_VALUE;
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
    public function getMethod()
    {
        if (is_null($this->method)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyPaymentSetMethodInfoMethodAction::FIELD_METHOD);
            if (is_null($data)) {
                return null;
            }
            $this->method = (string) $data;
        }

        return $this->method;
    }

    public function setMethod(?string $method): void
    {
        $this->method = $method;
    }
}
