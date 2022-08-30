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
final class CategoryChangeAssetOrderActionModel extends JsonObjectModel implements CategoryChangeAssetOrderAction
{
    public const DISCRIMINATOR_VALUE = 'changeAssetOrder';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?array
     */
    protected $assetOrder;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $assetOrder = null,
        ?string $action = null
    ) {
        $this->assetOrder = $assetOrder;
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
     * <p>New value to set. Must contain all Asset <code>id</code>s.</p>
     *
     *
     * @return null|array
     */
    public function getAssetOrder()
    {
        if (is_null($this->assetOrder)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_ASSET_ORDER);
            if (is_null($data)) {
                return null;
            }
            $this->assetOrder = $data;
        }

        return $this->assetOrder;
    }


    /**
     * @param ?array $assetOrder
     */
    public function setAssetOrder(?array $assetOrder): void
    {
        $this->assetOrder = $assetOrder;
    }
}
