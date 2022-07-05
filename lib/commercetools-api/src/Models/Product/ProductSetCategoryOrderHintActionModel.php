<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSetCategoryOrderHintActionModel extends JsonObjectModel implements ProductSetCategoryOrderHintAction
{
    public const DISCRIMINATOR_VALUE = 'setCategoryOrderHint';
    /**

     * @var ?string
     */
    protected $action;

    /**

     * @var ?string
     */
    protected $categoryId;

    /**

     * @var ?string
     */
    protected $orderHint;

    /**

     * @var ?bool
     */
    protected $staged;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $categoryId = null,
        ?string $orderHint = null,
        ?bool $staged = null
    ) {
        $this->categoryId = $categoryId;
        $this->orderHint = $orderHint;
        $this->staged = $staged;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**

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

     * @return null|string
     */
    public function getCategoryId()
    {
        if (is_null($this->categoryId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CATEGORY_ID);
            if (is_null($data)) {
                return null;
            }
            $this->categoryId = (string) $data;
        }

        return $this->categoryId;
    }

    /**

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

     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }


    /**
     * @param ?string $categoryId
     */
    public function setCategoryId(?string $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @param ?string $orderHint
     */
    public function setOrderHint(?string $orderHint): void
    {
        $this->orderHint = $orderHint;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}
