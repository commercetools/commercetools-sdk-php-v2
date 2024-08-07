<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartSetCustomerIdActionModel extends JsonObjectModel implements CartSetCustomerIdAction
{
    public const DISCRIMINATOR_VALUE = 'setCustomerId';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $customerId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $customerId = null,
        ?string $action = null
    ) {
        $this->customerId = $customerId;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:Customer">Customer</a>.
     * If the Customer is assigned to a <a href="ctp:api:type:CustomerGroup">CustomerGroup</a>, this update action also sets the value for the <code>customerGroup</code> field.
     * If empty, the update action removes the value for both <code>customerId</code> and <code>customerGroup</code>.</p>
     *
     *
     * @return null|string
     */
    public function getCustomerId()
    {
        if (is_null($this->customerId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CUSTOMER_ID);
            if (is_null($data)) {
                return null;
            }
            $this->customerId = (string) $data;
        }

        return $this->customerId;
    }


    /**
     * @param ?string $customerId
     */
    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }
}
