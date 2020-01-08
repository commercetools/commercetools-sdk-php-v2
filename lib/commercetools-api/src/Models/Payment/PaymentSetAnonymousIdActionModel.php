<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\JsonObjectModel;

final class PaymentSetAnonymousIdActionModel extends JsonObjectModel implements PaymentSetAnonymousIdAction
{
    const DISCRIMINATOR_VALUE = 'setAnonymousId';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $anonymousId;

    public function __construct(
        string $anonymousId = null
    ) {
        $this->anonymousId = $anonymousId;
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
     * <p>Anonymous ID of the anonymous customer that this payment belongs to.
     * If this field is not set any existing <code>anonymousId</code> is removed.</p>.
     *
     * @return null|string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentSetAnonymousIdAction::FIELD_ANONYMOUS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousId = (string) $data;
        }

        return $this->anonymousId;
    }

    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }
}
