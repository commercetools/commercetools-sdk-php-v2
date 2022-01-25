<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Api\Models\Common\ResourceIdentifier;
use Commercetools\Api\Models\Common\ResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StoreRemoveProductSelectionActionModel extends JsonObjectModel implements StoreRemoveProductSelectionAction
{
    public const DISCRIMINATOR_VALUE = 'removeProductSelection';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ResourceIdentifier
     */
    protected $productSelection;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ResourceIdentifier $productSelection = null
    ) {
        $this->productSelection = $productSelection;
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
     * <p>A Product Selection to be removed from the current Product Selections of this Store.</p>
     *
     * @return null|ResourceIdentifier
     */
    public function getProductSelection()
    {
        if (is_null($this->productSelection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_SELECTION);
            if (is_null($data)) {
                return null;
            }
            $className = ResourceIdentifierModel::resolveDiscriminatorClass($data);
            $this->productSelection = $className::of($data);
        }

        return $this->productSelection;
    }


    /**
     * @param ?ResourceIdentifier $productSelection
     */
    public function setProductSelection(?ResourceIdentifier $productSelection): void
    {
        $this->productSelection = $productSelection;
    }
}
