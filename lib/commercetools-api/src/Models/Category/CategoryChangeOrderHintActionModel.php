<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CategoryChangeOrderHintActionModel extends JsonObjectModel implements CategoryChangeOrderHintAction
{
    public const DISCRIMINATOR_VALUE = 'changeOrderHint';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $orderHint;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $orderHint = null,
        ?string $action = null
    ) {
        $this->orderHint = $orderHint;
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
     * <p>New value to set. Must be a decimal value between 0 and 1.</p>
     *
     *
     * @return null|string
     */
    public function getOrderHint()
    {
        if (is_null($this->orderHint)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORDER_HINT);
            if (is_null($data)) {
                return null;
            }
            $this->orderHint = (string) $data;
        }

        return $this->orderHint;
    }


    /**
     * @param ?string $orderHint
     */
    public function setOrderHint(?string $orderHint): void
    {
        $this->orderHint = $orderHint;
    }
}
