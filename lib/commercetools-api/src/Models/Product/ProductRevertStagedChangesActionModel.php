<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObjectModel;

final class ProductRevertStagedChangesActionModel extends JsonObjectModel implements ProductRevertStagedChangesAction
{
    const DISCRIMINATOR_VALUE = 'revertStagedChanges';

    /**
     * @var ?string
     */
    protected $action;

    public function __construct(
        string $action = null
    ) {
        $this->action = $action;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }
}
