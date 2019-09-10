<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObjectModel;

final class ShippingMethodSetPredicateActionModel extends JsonObjectModel implements ShippingMethodSetPredicateAction
{
    const DISCRIMINATOR_VALUE = 'setPredicate';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $predicate;

    public function __construct(
        string $action = null,
        string $predicate = null
    ) {
        $this->action = $action;
        $this->predicate = $predicate;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShippingMethodUpdateAction::FIELD_ACTION);
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
    public function getPredicate()
    {
        if (is_null($this->predicate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShippingMethodSetPredicateAction::FIELD_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->predicate = (string) $data;
        }

        return $this->predicate;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setPredicate(?string $predicate): void
    {
        $this->predicate = $predicate;
    }
}
